<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    {{-- Date Picker --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/rome.css">

    {{-- <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> --}}

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <title>{{ $judul }}</title>
</head>

<body style="max-width: 100%;overflow-x: hidden">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background-color: rgb(37, 37, 37);max-height: 80px">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/hutsapparel.png" width="150px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ $judul === 'HUTS APPAREL' ? 'active' : '' }} "
                                href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $judul === 'Belanja | HUTS APPAREL' ? 'active' : '' }} "
                                href="/belanja">Belanja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $judul === 'Pesan Kaos | HUTS APPAREL' ? 'active' : '' }}"
                                href="/custom">Pesan
                                Kaos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $judul === 'Tentang Huts Apparel' ? 'active' : '' }}"
                                href="/about">Tentang
                                Kami</a>
                        </li>
                        {{-- {{ $title === 'Custom' ? 'active' : '' }} --}}
                    </ul>
                </div>
            </div>
            <div class="icon">
                <ul class="navbar-nav dropdown">
                    <li class="navbar-item">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">
                            <h5><i class="fa-solid fa-cart-shopping text-light me-3 mt-2"></i></h5>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left" style="right:70%; left:auto;">
                            {{-- <span class="dropdown-item dropdown-header">1 Produk</span> --}}
                            <div class="dropdown-divider"></div>
                            @foreach ($cart_item as $ci)
                                <div class="dropdown-item d-flex flex-row">
                                    <div class="col d-flex justify-items-center">
                                        <input class="form-check-input me-2 my-auto" type="checkbox" value=""
                                            id="flexCheckDefault">
                                    </div>
                                    <div class="col d-flex justify-items-center">
                                        <img src="./storage/img/{{ $ci->img_produk }}" class="img-cart me-2"
                                            style="max-width: 80px;">
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-center" style="flex-direction: column">
                                        <small>{{ $ci->nama_produk }}</small>
                                        <small>{{ $ci->harga_produk }}</small>
                                    </div>
                                    <div class="col d-flex justify-items-center">
                                        <form action="/hapuscart" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id_cart" value="{{ $ci->id_cart }}">
                                            <button type="submit" class="btn btn-danger m-2"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                            @endforeach
                            <a href="/payproduk" class="btn btn-success d-flex justify-content-center">Check
                                Out Barang</a>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- INI PROFIL AKUN DESIGN --}}
            <div class="profilakun">
                <ul class="navbar-nav dropdown">
                    <li class="navbar-item">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                                        {{ Auth::user()->un_cust }} <i class="ms-2 fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                        <div class="dropdown-divider"></div>
                                        <a href="/profiluser" class="dropdown-item d-flex">
                                            Profil Saya
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item d-flex">
                                            Riwayat Transaksi
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item d-flex">
                                            Riwayat Pesan Kaos
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button class="dropdown-item btn-theme" type="submit">
                                                Log Out
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <div class="user-auth d-flex">
                                        <a href="/login"
                                            class="text-sm text-light me-2 fw-bold d-flex align-items-center me-4"
                                            style="text-decoration: none;"><i
                                                class="fa-solid fa-right-to-bracket me-2"></i>Masuk</a>
                                        @if (Route::has('register'))
                                            <a href="/register"
                                                class="ml-4 text-sm text-light fw-bold d-flex align-items-center"
                                                style="text-decoration: none;"><i
                                                    class="fa-solid fa-user-plus me-2"></i>Daftar</a>
                                        @endif
                                    </div>
                                @endauth
                            </div>
                        @endif

                    </li>
                </ul>
            </div>
            {{-- INI PROFIL AKUN --}}
            {{-- @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline text-light">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline text-light">Daftar</a>
                            @endif
                        @endauth
                    </div>
                @endif --}}
        </div>
    </nav>


    @yield('container')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="/js/jquery.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->

    {{-- Date Picker --}}
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/rome.js"></script>

    <script src="js/main.js"></script>


    {{-- Footer --}}
    <div class="footer">
        <div class="row text-light p-3 " style="background-color: rgb(32, 63, 150);">
            <div class="col-md-4 p-3">
                <h3>Tentang Kami</h3>
                <p>Huts Merupakan brand kaos independen yang berlokasi di sukoharjo kartasura, brand ini telah berdiri
                    sejak tahun 2016. Huts berupaya membuat produk dengan konsep yang minimalist dan elegant sehingga
                    akan nyaman untuk dipakai.</p>
            </div>
            <div class="col-md-4 p-3">
                <h3>Kontak Kami</h3>
                <h6><i class="fa-brands fa-instagram me-2"></i>Instagram : <a class="text-light"
                        href="https://www.instagram.com/huts.cstm/">@huts.cstm</a></h6>
                <h6><i class="fa-brands fa-whatsapp me-2"></i>Whatsapp : 0812-2649-3439</h6>
            </div>
            <div class="col-md-4 p-3">
                <h3>Lokasi Huts Apparel</h3>
                <div class="embed-responsive" style="width: 200px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.183233640554!2d110.74054811477669!3d-7.554989794551462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e59207bb3ddc2e4!2zN8KwMzMnMTguMCJTIDExMMKwNDQnMzMuOSJF!5e0!3m2!1sid!2sid!4v1650960157396!5m2!1sid!2sid"
                        width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="isi-footer bg-dark text-center text-light p-2">
            <strong>Copyright &copy; 2022 Huts Apparel.</strong>
            All rights reserved.
        </div>
    </div>
</body>

</html>
