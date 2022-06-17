@extends('user.layouts.mainuser')

@section('container')
    <div class="container-custom" style="max-width: 100%;overflow-x: hidden">
        <div class="judulpay text-center p-5">
            <h1 style="font-weight: bold">Halaman Pembayaran</h1>
        </div>
        <div class="konten-custom">
            <div class="row mt-2">
                <div class="col-md-7 form-custom p-5" style=" border-radius:20px">
                    <form>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="nama_customer">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_custom"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nohp_customer">No Hp</label>
                                <input type="text" class="form-control" id="nohp_customer" placeholder="Masukkan No Hp">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email_customer">Email</label>
                                <input type="text" class="form-control" id="email_customer" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="button text-center mt-4 mb-4">
            <a href="/detailproduk" class="btn btn-danger"><i class="fa-solid fa-angle-left me-2"></i>Kembali</a>
            <a href="/detailproduk" class="btn btn-success">Lanjut<i class="fa-solid fa-angle-right ms-2"></i></a>
        </div>
    </div>
@endsection
