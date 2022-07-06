@extends('user.layouts.mainuser')

@section('container')
    <div class="hero-bg-user">
        <div class="global-container" style="">
            <div class="card login-form col-md-6 no-gutters p-5 mb-5" style="margin-top:130px;"
                style="border-radius: 30px;background-color: rgb(255, 255, 255, 0.8);">
                <div class="card-body">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <center>
                        <img src="img/logo.png" width="120">
                    </center>
                    <h1 class="card-title text-center" style="font-weight: bold;">
                        Login
                    </h1>
                    <div class="card-text p-2">
                        <form action="{{ route('login') }}" method="POST" width="100">
                            @csrf
                            <div class="mb-2">
                                <label for="un_cust" class="form-label">Username</label>
                                <input type="text" class="form-control" id="un_cust" name="un_cust" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required
                                    autocomplete="current-password">

                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary bg-gradient fw-bold">Masuk</button>
                            </div>
                        </form>
                        <center class="mt-2">
                            <a class="me-3 btn btn-success bg-gradient fw-bold" href="/register">Daftar</a>
                            <a class="text-center btn btn-danger bg-gradient text-light fw-bold" href="/">Kembali</a>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
