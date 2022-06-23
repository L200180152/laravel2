@extends('user.layouts.mainuser')

@section('container')
    <div class="konten-about" style="max-width: 100%;overflow-x: hidden;margin-top: 80px; background-color: rgb(32, 63, 150)">
        <div class="row bg-gradient p-5 text-light d-flex justify-content-center">
            <div class="header-tentangkami p-3 ">
                <h1 class="text-center" style="font-weight: bold;">Huts Apparel</h1>
                <hr class="mx-auto" style="width: 70%;">
            </div>
            <div class="col-lg-4">
                <img src="img/logo.png" style="width: 350px;">
            </div>
            <div class="col">
                <p>Huts Merupakan brand kaos independen yang berlokasi di sukoharjo kartasura, brand ini telah berdiri
                    sejak tahun 2016. Huts berupaya membuat produk dengan konsep yang minimalist dan elegant sehingga
                    akan nyaman untuk dipakai.
                </p>
            </div>

        </div>
        <div class="card shadow-lg m-5 bg-light bg-gradient" style="border-radius: 20px;">
            <div class="card-body d-flex justify-content-center">
                <div class="col-md-6 p-3">
                    <h1 style="font-weight:bold;"> Kontak Kami</h1>
                    <hr>
                    <h6><i class="fa-brands fa-instagram me-2"></i>Instagram : <a
                            href="https://www.instagram.com/huts.cstm/">@huts.cstm</a></h6>
                    <h6><i class="fa-brands fa-whatsapp me-2"></i>Whatsapp : 0812-2649-3439</h6>
                    <div class="gambarpesan m-5">
                        <img src="./img/tentangkami/pesan.png" class="" style="width:250px;">
                    </div>

                </div>
                <div class="col-md-4 p-3 ms-5">
                    <form>
                        <div class="mb-4" style="font-weight:bold;margin-top: 70px;">
                            <div class="form-group mb-2">
                                <label for="nama_user" class="mb-2">Nama</label>
                                <input type="text" class="form-control" id="nama_user" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email_user" class="mb-2">Email</label>
                                <input type="email" class="form-control" id="email_user" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group mb-2">
                                <label for="pesan_user" class="mb-2">Pesan</label>
                                <textarea name="pesan_user" class="form-control" id="pesan_user" cols="30" rows="5"
                                    placeholder="Masukkan Pesan"></textarea>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary bg-gradient">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    </div>
    {{-- <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    </div> --}}
@endsection
