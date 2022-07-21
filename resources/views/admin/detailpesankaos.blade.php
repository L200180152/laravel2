@extends('admin.mainadmin')

@section('customadmin')
    <div class="content-wrapper">

        <div class="content-header mt-5 p-3">
            <div class="row mb-2" style="margin-top: 30px;">
                <div class="col-sm-6">
                    <h1>Detail Kaos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pesan Kaos/Detail Kaos</li>
                    </ol>
                </div>
                <div class="card-body">
                    <a href="/customadmin" class="btn btn-danger btn-gradient mb-2">Kembali</a>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Project</th>
                                <th>Deskripsi Singkat</th>
                                <th>Ukuran M</th>
                                <th>Ukuran L</th>
                                <th>Ukuran XL</th>
                                <th>Lengan Kaos Pendek</th>
                                <th>Lengan Kaos Panjang</th>
                                <th>Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pesankaos->id }}</td>
                                <td>{{ $pesankaos->namaproject }}</td>
                                <td>{{ $pesankaos->desksingkat }}</td>
                                <td>{{ $pesankaos->uk_M }}</td>
                                <td>{{ $pesankaos->uk_L }}</td>
                                <td>{{ $pesankaos->uk_XL }}</td>
                                <td>{{ $pesankaos->lgnkaospndk }}</td>
                                <td>{{ $pesankaos->lgnkaospnjg }}</td>
                                <td>{{ $pesankaos->nohp_cust }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <section class="content">

        </section>

    </div>
@endsection
