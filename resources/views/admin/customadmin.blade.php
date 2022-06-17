@extends('admin.mainadmin')

@section('customadmin')
    <div class="content-wrapper">

        <div class="content-header mt-5 p-3">
            <div class="row mb-2" style="margin-top: 30px;">
                <div class="col-sm-6">
                    <h1>Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Jenis Custom</th>
                            <th>Ekspedisi</th>
                            <th>Total Pembayaran</th>
                            <th>Tanggal Order</th>
                            <th>Bukti Pembayaran</th>
                            <th>Validasi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td>Aji Mustaqim</td>
                            <td>082134567564</td>
                            <td>Karanganyar</td>
                            <td>Kaos<br><a href="#">Lihat Detail</a></td>
                            <td>JnT Express</td>
                            <td>Rp 900.000,00-</td>
                            <td>17 April 2022</td>
                            <td><button class="btn btn-primary">Lihat Gambar</button></td>
                            <td>
                                <button class="btn btn-success">Validasi</button>
                                <button class="btn btn-danger">Cancel</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
