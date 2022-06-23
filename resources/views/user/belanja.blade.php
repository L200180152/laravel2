@extends('user.layouts.mainuser')

@section('container')
    <div class="container-fluid">
        <div class="container-belanja" style="max-width: 100%;overflow-x: hidden;">
            <div class="header-belanja text-center">

            </div>
        </div>
        <div class="row p-4" style="">
            <h1 style="font-weight: bold; text-align: center">Produk</h1>
            <div class="produk-huts row row-cols-1 row-cols-md-2 g-4" style="display: flex">
                @foreach ($produk as $item)
                    <div class="col-md-3 p-2 mt-5">
                        <div class="card" style="">
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
