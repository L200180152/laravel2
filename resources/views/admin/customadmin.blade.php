@extends('admin.mainadmin')

@section('customadmin')
    <div class="content-wrapper">

        <div class="content-header mt-5 p-3">
            <div class="row mb-2" style="margin-top: 30px;">
                <div class="col-sm-6">
                    <h1>Pesan Kaos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pesan Kaos</li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="card-body">
                <a href="#" class="btn btn-primary btn-gradient mb-2">Proses Produksi</a>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Nama Project</th>
                            <th>Deskripsi Singkat</th>
                            <th>Ukuran Kaos</th>
                            <th>Lengan Kaos</th>
                            <th>Nomor Telepon</th>
                            <th>Deadline Produksi</th>
                            <th>File Desain</th>
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>Nama Project</td>
                            <td>Deskripsi Singkat</td>
                            <td>S= ; M = ; L = ; XL= ; XXL= ; XXXL= ;</td>
                            <td>Pendek = ; Panjang ;</td>
                            <td>082133669857</td>
                            <td>Date</td>
                            <td><a href="#">Download Desain</a></td>
                            <td>Total bayar</td>
                            <td><a href="#" class="btn btn-success m-2">Setuju</a><a href="#"
                                    class="btn btn-danger m-2">Tidak Setuju</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
