@extends('admin.mainadmin')

@section('transaksi')
    <div class="content-wrapper">

        <div class="content-header mt-5 p-3">
            <div class="row mb-2" style="margin-top: 30px;">
                <div class="col-sm-6">
                    <h1>Daftar User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar User</li>
                    </ol>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>id User</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->un_cust }}</td>
                                <td>{{ $d->nama_cust }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->nohp_user }}</td>
                                <td><a href="#" class="btn btn-primary bg-gradient">Alamat</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
