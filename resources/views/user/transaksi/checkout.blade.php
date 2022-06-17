@extends('user.layouts.mainuser')

@section('container')
    <div class="kontencheckout mx-3" style="margin-top:100px;">
        <h1 class="text-center p-5" style="font-weight:bold;">Check Out Barang</h1>
    </div>
    <div class="row bg-success">
        <div class="col-md-7 bg-primary mx-3 p-3 mt-2 mb-3">
            <div class="row-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3>Order</h3>
                        <div class="itemco rounded d-flex p-3" style="background-color: rgb(233, 233, 233)">
                            <img src="img/belanja/1.jpg" style="width:15rem;">
                            <div class="itemco-detail mx-2 p-3">
                                <h2 style="font-weight: bold">Kaos Huts</h2>
                                <label>Size L</label>
                                <h2 style="font-weight: bold; color: brown">Rp. 60.000,00</h2>
                            </div>
                            <div class="col p-auto ms-4 my-auto">
                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-primary mx-3 p-3 mt-2 mb-3">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h3>Total Harga</h3>
                        </center>
                        <div class="detailharga col-md-12 mt-3 d-flex">
                            <h3>Kaos Friday</h3>
                            <h5>Rp. 60.000,00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
