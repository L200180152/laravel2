@extends('user.layouts.mainuser')

@section('container')
    <div class="container-fluid">
        <div class="container-belanja" style="max-width: 100%;overflow-x: hidden;">
            <div class="header-belanja text-center">

            </div>
        </div>
        <div class="row p-4" style="">
            <h1 style="font-weight: bold; text-align: center">Produk</h1>
            <hr>
            <div class="produk-huts mt-3 d-flex justify-content-center">
                @foreach ($produk as $item)
                    <div class="col-md-3">
                        <div class="card border border-2 border-primary shadow-lg">
                            <form action="{{ route('addcart') }}" method="POST">
                                <img src="./storage/img/{{ $item->img_produk }}" class="card-img-top"
                                    style="max-height: 220px;object-fit: cover;">
                                <div class="card-sell p-3">
                                    <h3 class="card-title">{{ $item->nama_produk }}</h3>
                                    <h5 class="card-price">Rp.{{ $item->harga_produk }},-</h5>
                                    <div class="d-flex mt-3">
                                        <a href="/detailproduk/{{ $item->id_produk }}" class="btn btn-primary me-2">Detail
                                            Produk</a>

                                        <button class="btn btn-success" type="submit">Tambah Keranjang</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
