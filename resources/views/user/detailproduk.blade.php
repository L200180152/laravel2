@extends('user.layouts.mainuser')

@section('container')
    <div class="kontendetailproduk mx-3" style="margin-top:100px;">
        <h1 class="text-center p-5" style="font-weight:bold;">Detail Produk</h1>
        <div class="card" style="margin-bottom: 150px;">
            <div class="card-body d-flex">
                <div class="col">
                    <p class="card-text">
                    <h1>{{ $nama_produk }}</h1>
                    <small>Deskripsi Produk
                        {{ $desc_produk }}
                    </small>
                    <h3>Berat Barang</h3>
                    <small>{{ $berat_produk }} Kg</small><strong>
                        <h3>Stok Produk</h3>
                        <small>{{ $stok_produk }}</small>
                        <div class="harga text-white d-flex align-items-center pt-2 ps-2"
                            style="margin-right: 20px;background-color: darkslategray;">
                            <h1>Rp. {{ $harga_produk }}</h1>
                        </div>
                        <div class="tombol">
                            <a class="btn btn-secondary p-3 my-2" href="{{ route('addcart') }}">Tambahkan ke Keranjang</a>
                            <a class="btn btn-success p-3 my-2" href="#">Beli Sekarang</a>
                        </div>
                        </p>
                </div>
                <div class="col">
                    <img src="/storage/img/{{ $img_produk }}" class="img-responsive detailproduk_img"
                        style="max-width: 600px;">

                </div>
            </div>
        </div>
    </div>
@endsection
