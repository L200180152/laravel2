@extends('user.layouts.mainuser')

@section('container')
    <div class="konten-customtransaksi"
        style="max-width: 100%;overflow-x: hidden;margin-top: 80px; background-color: rgb(241, 241, 241);height:600px;">
        <div class="row bg-gradient p-5 d-flex justify-content-center">
            <div class="header-customtransaksi p-3 text-center">
                <h1 style="font-weight: bold;">Pesan Kaos Huts Apparel</h1>
                <hr class="mx-auto" style="width: 70%;">
                <div class="col-md-5 bg-success text-light p-3 rounded mx-auto mb-3">
                    <h3>Pesanan Anda Berhasil Masuk!</h3>
                    <small>Silahkan Hubungi Kontak Kami untuk Pembahasan Lebih lanjut.</small>
                    <a href="https://api.whatsapp.com/send?phone=6281226493439&text=Halo%20CS%20HUTS,%20saya%20ingin%20konfirmasi%20pesanan%20saya%20di%20huts"
                        class="btn p-3 text-light bg-gradient shadows" style="background-color: rgb(79, 206, 110)">
                        <i class="fa-brands fa-whatsapp me-2"></i>Kontak Kami untuk Konfirmasi</a>
                </div>
                <a href="/" class="btn btn-primary p-2"><i class="fa-solid fa-house"></i></a>
            </div>
        </div>
    </div>
@endsection
