<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    // USER

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'email' => ['required', 'string', 'email'],
        //     'password' => ['required', 'string'],
        // ];

        return [
            'un_cust' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    // PAKE EMAIL

    // public function authenticate()
    // {
    //     $this->ensureIsNotRateLimited();

    //     if (!Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
    //         RateLimiter::hit($this->throttleKey());

    //         throw ValidationException::withMessages([
    //             'email' => trans('auth.failed'),
    //         ]);
    //     }

    //     RateLimiter::clear($this->throttleKey());
    // }


    public function authenticate()
    {
        $this->ensureIsNotRateLimited();
        // , $this->boolean('remember')
        if (!Auth::attempt($this->only('un_cust', 'password'))) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages([
                'un_cust' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        // PAKE EMAIL
        // throw ValidationException::withMessages([
        //     'email' => trans('auth.throttle', [
        //         'seconds' => $seconds,
        //         'minutes' => ceil($seconds / 60),
        //     ]),
        // ]);

        throw ValidationException::withMessages([
            'un_cust' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        // PAKE EMAIL
        // return Str::lower($this->input('email')) . '|' . $this->ip();
        return Str::lower($this->input('un_cust')) . '|' . $this->ip();
    }
}
