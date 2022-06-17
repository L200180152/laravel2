@extends('admin.mainadmin')

@section('customadmin')
    <div class="content-wrapper">

        <div class="content-header mt-5 p-3">
            <div class="row mb-2" style="margin-top: 30px;">
                <div class="col-sm-6">
                    <h1>Rekap Laporan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Rekap Laporan</li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="card-body">
                <a href="#" class="btn btn-primary btn-gradient mb-3" data-toggle="dropdown">Semua<i
                        class="fas fa-angle-down ml-2"></i></a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                    <a href="#" class="dropdown-item">Perbulan</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">PerTahun</a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Tanggal</th>
                            <th>Jumlah Terjual</th>
                            <th>Lihat Detail</th>
                            <th>Harga Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kaos Huts</td>
                            <td>125.000</td>
                            <td>5</td>
                            <td><a href="#">Lihat Detail</a></td>
                            <td>625.000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total Harga</strong></td>
                            <td>625.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
