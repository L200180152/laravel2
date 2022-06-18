@extends('admin.mainadmin')

@section('addadmin')
    <div class="content-wrapper">
        <div class="content-header mt-5 p-3">
            <div class="row mb-2" style="margin-top: 30px;">
                <div class="col-sm-6">
                    <h1>Tambah Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Admin</li>
                    </ol>
                </div>
            </div>
        </div>

        @if (session()->has('berhasil'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('berhasil') }}
            </div>
        @elseif(session()->has('gagal'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('gagal') }}
            </div>
        @endif

        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('tambah_admin') }}" method="POST" style="max-width:400px;">
                    @csrf
                    <div class="mb-2">
                        <label for="nama_admin" class="form-label">Nama Admin</label>
                        <input type="text" class="form-control @error('nama_admin') is invalid @enderror" id="nama_admin"
                            name="nama_admin">
                    </div>

                    @error('nama_admin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-2">
                        <label for="username_admin" class="form-label">Username</label>
                        <input type="text" class="form-control @error('username_admin') is invalid @enderror"
                            id="username_admin" name="username_admin">
                    </div>

                    @error('username_admin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password_admin') is invalid @enderror"
                            id="password" name="password">
                    </div>

                    @error('password_admin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Ulang Password</label>
                        <input type="password"
                            class="form-control @error('password_confirmation_admin') is invalid @enderror"
                            id="password_confirmation" name="password_confirmation">
                    </div>

                    @error('password_confirmation_admin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Daftar Admin</button>
                    </div>
                </form>
            </div>
        </section>

    </div>
@endsection
