@extends('user.layouts.mainuser')

@section('container')
    <div class="kontendetailproduk mx-3" style="margin-top:100px;">
        <h1 class="text-center p-5" style="font-weight:bold;">Profil User</h1>
    </div>

    {{-- Codingan Profil --}}

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Pengaturan Profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control"
                            placeholder="username" value=""></div>
                    <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control"
                            placeholder="nama" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nomor HP</label><input type="text" class="form-control"
                            placeholder="nomor hp" value=""></div>
                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Simpan
                        Profil</button></div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <label class="labels">Alamat</label>
                    <textarea name="alamat_cust" id="alamat_cust" class="form-control" placeholder="Alamat"></textarea>
                    <div class="row">
                        <div class="col-md-6"><label class="labels">Negara</label><input type="text" class="form-control"
                                placeholder="negara" value=""></div>
                        <div class="col-md-6"><label class="labels">Provinsi</label><input type="text"
                                class="form-control" value="" placeholder="provinsi"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label class="labels">Kabupaten</label><input type="text"
                                class="form-control" placeholder="kabupaten" value=""></div>
                        <div class="col-md-6"><label class="labels">Kecamatan</label><input type="text"
                                class="form-control" value="" placeholder="kecamatan"></div>
                    </div>
                    <div class="col-md-6"><label class="labels">kode pos</label><input type="text" class="form-control"
                            value="" placeholder="Kode Pos"></div>
                    <div class="mt-3 text-center"><button class="btn btn-warning profile-button mt-3" type="button">Ganti
                            Alamat</button></div>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>


    <div class="p-3 py-5 mt-5">
    </div>
    <a href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></a>
    <a href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></a>
    <a href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></a>
@endsection
