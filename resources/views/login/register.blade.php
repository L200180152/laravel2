@extends('user.layouts.mainuser')

@section('container')
    <div class="hero-bg-user">
        <div class="global-container">
            @if (session()->has('berhasil'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('berhasil') }}
                </div>
            @elseif(session()->has('gagal'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('gagal') }}
                </div>
            @endif
            <div class="card register-form col-md-6 p-5">
                <div class="card-body">
                    <h1 class="card-title text-center" style="font-weight: bold;">
                        Halaman Pendaftaran
                    </h1>
                    <div class="card-text">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="mb-2">
                                <label for="nama_cust" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_cust') is invalid @enderror"
                                    id="nama_cust" name="nama_cust" required>
                            </div>
                            @error('nama_cust')
                                <div class="alert alert-danger mt-2">
                                    <small>Lengkapi Data Nama Lengkap</small>
                                </div>
                            @enderror

                            <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('un_cust') is invalid @enderror"
                                    id="un_cust" name="un_cust" required>
                            </div>
                            @error('un_cust')
                                <div class="alert alert-danger mt-2">
                                    <small>Username tidak sesuai/Username sudah tersedia</small>
                                </div>
                            @enderror

                            <div class="mb-2">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is invalid @enderror"
                                    id="email" name="email" required>
                            </div>
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    <small>Email tidak sesuai/Email sudah tersedia</small>
                                </div>
                            @enderror

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is invalid @enderror"
                                    id="password" name="password" required autocomplete="new-password">
                            </div>
                            {{-- @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Ulang Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is invalid @enderror"
                                    id="password_confirmation" name="password_confirmation" required>
                            </div>
                            @error('password_confirmation')
                                <div class="  alert alert-danger mt-2">
                                    <small>Password anda salah</small>
                                </div>
                            @enderror
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('Sudah Terdaftar?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary bg-gradient fw-bold">Daftar</button>
                            </div>
                            <center class="mt-2">
                                <a class="me-3 btn btn-success bg-gradient fw-bold" href="/login">Masuk</a>
                                <a class="text-center btn btn-danger bg-gradient text-light fw-bold"
                                    href="/">Kembali</a>
                            </center>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
