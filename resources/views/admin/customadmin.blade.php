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
            @if (session()->has('berhasil'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('berhasil') }}
                </div>
            @elseif(session()->has('gagal'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('gagal') }}
                </div>
            @endif
            <div class="card-body">
                <a href="#" class="btn btn-primary btn-gradient mb-2">Proses Produksi</a>
                <a href="#" class="btn btn-success btn-gradient mb-2">Selesai Produksi</a>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Customer</th>
                            <th>Nama Project</th>
                            <th>Deskripsi Singkat</th>
                            <th>Detail Kaos</th>
                            <th>Nomor Telepon</th>
                            <th>File Desain</th>
                            <th>Jenis Sablon</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesankaos as $pk)
                            <tr>
                                <td>{{ $pk->id }}</td>
                                <td>{{ $pk->nama_cust }}</td>
                                <td>{{ $pk->namaproject }}</td>
                                <td>{{ $pk->desksingkat }}</td>
                                <td><a href="/customadmin/{{ $pk->id }}">Detail Kaos</a></td>
                                <td>{{ $pk->nohp_cust }}</td>
                                <td><a href='/storage/rar/{{ $pk->FD_custom }}'>Download File</a>
                                </td>
                                <td>{{ $pk->jenissablon }}</td>
                                <td>
                                    <div class="tombol">
                                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                            data-target="#modal-default{{ $pk->id }}">
                                            Konfirmasi
                                        </button>

                                        <form action="/customadmin/hpspesankaos" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $pk->id }}">
                                            <button type="submit" class="btn btn-danger">Batal</button>
                                        </form>

                                        {{-- Modal Konfirmasi --}}
                                        <div class="modal fade" id="modal-default{{ $pk->id }}">
                                            <form action="/customadmin/konfirmasi/{{ $pk->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <input type="hidden" name="id" value="{{ $pk->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title ">Konfirmasi Pesanan</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Wajib Memasukkan Deadline Produksi dan Total Bayar Customer!
                                                            </p>
                                                            <label>Deadline Produksi</label>
                                                            <input type="date" class="form-control" name="dlproduksi"
                                                                id="dlproduksi" required>
                                                            <label>Total Harga</label>
                                                            <input type="text" class="form-control" name="totalbayar"
                                                                id="totalbayar" placeholder="Masukkan Total Harga" required>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Konfirmasi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
