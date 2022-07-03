@extends('user.layouts.mainuser')

@section('container')
    <div class="kontendetailproduk mx-3" style="margin-top:100px;">
        <h1 class="text-center p-5" style="font-weight:bold;">Profil User</h1>
    </div>

    {{-- Pop Messagge --}}
    @if (session('berhasil'))
        <div class="alert alert-success mx-auto" style="max-width: 50%;" role="alert">
            {{ session('berhasil') }}
        </div>
    @elseif(session('gagal'))
        <div class="alert alert-danger mx-auto" style="max-width: 50%;" role="alert">
            {{ session('gagal') }}
        </div>
    @endif

    {{-- Codingan Profil --}}

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ Auth::user()->un_cust }}</span><span
                        class="text-black-50">{{ Auth::user()->email }}</span><span>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-right">Pengaturan Profil</h4>
                </div>
                <form action="/profiluser/edit" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mt-2">
                        <div class="form-group">
                            <label class="labels">Username</label>
                            <input type="text" class="form-control" placeholder="username"
                                value="{{ Auth::user()->un_cust }}" id="un_cust" name="un_cust">
                        </div>
                        <div class="form-group">
                            <label class="labels">Nama</label>
                            <input type="text" class="form-control" placeholder="nama"
                                value="{{ Auth::user()->nama_cust }}" id="nama_cust" name="nama_cust">
                        </div>
                        <div class="form-group">
                            <label class="labels">Nomor HP</label>
                            <input type="text" class="form-control" placeholder="nomor hp"
                                value="{{ Auth::user()->nohp_cust }}" id="nohp_cust" name="nohp_cust">
                        </div>
                        <div class="form-group">
                            <label class="labels">Email</label>
                            <input type="text" class="form-control" placeholder="Email"
                                value="{{ Auth::user()->email }}" id="email" name="email">
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="row mt-5">
                    <div class="form-group col-md-6">
                        <label class="labels">Negara</label>
                        <select name="negara" id="negara" class="form-control">
                            <option value="">Pilih Negara</option>
                            @foreach ($negara as $n)
                                <option value="{{ $n->id }}">{{ $n->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="labels">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="labels">Kabupaten</label>
                        <select name="kabupaten" id="kabupaten" class="form-control">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="labels">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="labels">Desa</label>
                        <select name="desa" id="desa" class="form-control">
                            <option value="">Pilih Desa</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="labels">kode pos</label>
                        <select name="kodepos" id="kodepos" class="form-control">
                            <option value="">Pilih Kode Pos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="labels">Detail Alamat</label>
                        <textarea name="alamat_cust" id="alamat_cust" class="form-control" placeholder="Alamat">{{ Auth::user()->alamat_cust }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Simpan
                    Profil</button></div>
            </form>
        </div>
    </div>
    </div>
    </div>


    <div class="p-3 py-5 mt-5">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $("#negara").change(function() {
                let negara_id = this.value;
                $.get('/getstate?negara=' + negara_id, function(data) {
                    $("#provinsi").html(data);
                })
            })
        })
    </script>
@endsection
