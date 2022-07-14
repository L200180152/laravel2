@extends('user.layouts.mainuser')

@section('container')
    <div class="kontendetailproduk mx-3" style="margin-top:100px;">
        <h1 class="text-center p-5" style="font-weight:bold;">Detail Produk</h1>
        <div class="card" style="margin-bottom: 150px;">
            <div class="card-body d-flex">
                <div class="col">
                    <h3>{{ $produk->nama_produk }}</h3>
                    <h5>
                        {{ $produk->desc_produk }}
                    </h5>
                    <h3>Berat Barang</h3>
                    <h5>{{ $produk->berat_produk }} Kg</h5>
                    <h3>Stok Produk</h3>
                    <h5>{{ $produk->stok_produk }}</h5>
                    <div class="harga text-white d-flex align-items-center pt-2 ps-2"
                        style="margin-right: 20px;background-color: darkslategray;">
                        <h1>Rp. {{ $produk->harga_produk }}</h1>
                    </div>
                    <div class="col d-flex">
                        <form action="/addcartdetail" method="POST">
                            @csrf
                            <input type="hidden" name="id_produk" id="id_produk" value="{{ $produk->id_produk }}">
                            <button class="btn btn-secondary p-3 my-2 me-3" type="submit">Tambah Keranjang</button>
                        </form>
                        <form action="#" method="POST">
                            @csrf
                            <input type="hidden" name="id_produk" id="id_produk" value="{{ $produk->id_produk }}">
                            <button class="btn btn-success p-3 my-2" type="submit">Beli Sekarang</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <img src="/storage/img/{{ $produk->img_produk }}" class="img-responsive detailproduk_img"
                        style="max-width: 600px;">

                </div>
            </div>
        </div>
    </div>
@endsection
