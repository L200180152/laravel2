@extends('admin.mainadmin')

@section('produk')
    <div class="content-wrapper p-3 mt-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Produk</li>
                        </ol>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahproduk">
                    Tambah Produk
                </button>

                <!-- Modal -->
                <div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="dataprodukLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dataprodukLabel">Data Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- form start -->
                                <form action="{{ route('rute_tambahproduk') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="namaproduk">Nama Produk</label>
                                            <input type="text"
                                                class="form-control @error('namaproduk') is-invalid @enderror"
                                                name="namaproduk" id="namaproduk" placeholder="nama produk">
                                        </div>

                                        @error('namaproduk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="hargaproduk">Harga</label>
                                            <input type="text"
                                                class="form-control @error('hargaproduk') is-invalid @enderror"
                                                name="hargaproduk" id="hargaproduk" placeholder="harga produk">
                                        </div>

                                        @error('hargaproduk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="desc_produk">Deskripsi</label>
                                            <textarea class="form-control @error('desc_produk') is-invalid @enderror" name="desc_produk" id="desc_produk"
                                                cols="30" rows="10" placeholder="deskripsi produk"></textarea>
                                        </div>

                                        @error('desc_produk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="beratproduk">Berat Produk</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text"
                                                    class="form-control @error('beratproduk') is-invalid @enderror"
                                                    style="max-width: 100px;margin-right: 10px;" name="beratproduk"
                                                    id="beratproduk" placeholder="berat produk"><Strong>/Kg</Strong>
                                            </div>

                                        </div>

                                        @error('beratproduk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="stokproduk">Stok</label>
                                            <input type="text"
                                                class="form-control @error('stokproduk') is-invalid @enderror"
                                                name="stokproduk" id="stokproduk" placeholder="stok produk">
                                        </div>

                                        @error('stokproduk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="uploadgambar">Upload Gambar</label>
                                            <img class="img-preview img-fluid">
                                            <input type="file"
                                                class="form-control @error('uploadgambar') is-invalid @enderror"
                                                id="uploadgambar" name="uploadgambar" onchange="PreviewImage()">
                                            {{-- <label class="custom-file-label" for="uploadgambar">Upload Gambar</label>
                                            </div> --}}
                                            @error('uploadgambar')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


            </div><!-- /.container-fluid -->
        </section>

        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi Produk</th>
                        <th>Berat Produk</th>
                        <th>Stok </th>
                        <th>Gambar</th>
                        <th>Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detailproduk as $item)
                        <tr>
                            <td>{{ $item->id_produk }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->harga_produk }}</td>
                            <td>{{ $item->desc_produk }}</td>
                            <td>{{ $item->berat_produk }} Kg</td>
                            <td>{{ $item->stok_produk }}</td>
                            <td><img style="max-width: 250px" src="./storage/img/{{ $item->img_produk }}"></td>
                            <td>

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#dataproduk{{ $item->id_produk }}">
                                    Edit
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="dataproduk{{ $item->id_produk }}" tabindex="-1"
                                    role="dialog" aria-labelledby="dataprodukLabel" aria-hidden="true">
                                    <form action="/produk-adm/{{ $item->id_produk }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="dataprodukLabel">Data Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- form start -->
                                                    <div class="card-body">

                                                        <input type="hidden" name="id_produk"
                                                            value="{{ $item->id_produk }}">
                                                        <div class="form-group">
                                                            <label for="namaproduk">Nama Produk</label>
                                                            <input type="text" class="form-control"
                                                                id="updatenamaproduk" placeholder="nama produk"
                                                                name="updatenamaproduk"
                                                                value="{{ $item->nama_produk }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="hargaproduk">Harga</label>
                                                            <input type="text" class="form-control"
                                                                id="updatehargaproduk" placeholder="harga produk"
                                                                name="updatehargaproduk"
                                                                value="{{ $item->harga_produk }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="desc_produk">Deskripsi</label>
                                                            <textarea class="form-control" id="updatedesc_produk" cols="30" rows="10" placeholder="deskripsi produk"
                                                                name="updatedesc_produk">{{ $item->desc_produk }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="beratproduk">Berat Produk</label>
                                                            <input type="text" class="form-control"
                                                                id="updateberatproduk" placeholder="berat produk"
                                                                name="updateberatproduk"
                                                                value="{{ $item->berat_produk }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stokproduk">Stok</label>
                                                            <input type="text" class="form-control"
                                                                id="updatestokproduk" placeholder="stok produk"
                                                                name="updatestokproduk"
                                                                value="{{ $item->stok_produk }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="updategambar">Upload Gambar</label>
                                                            <input type="hidden" name="old_image"
                                                                value="{{ $item->img_produk }}">
                                                            @if ($item->img_produk)
                                                                <img src="./storage/img/{{ $item->img_produk }}"
                                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block"
                                                                    id="updategambar">
                                                            @else
                                                                <img class="imgupdate-preview img-fluid mb-3 col-sm-5">
                                                            @endif
                                                            <input type="file" class="form-control" id="updategambar"
                                                                name="updategambar" onchange="PreviewImageUpdate()">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

        </div>

    </div>



    {{-- button hapus --}}
    <button type="button" class="btn btn-danger" data-toggle="modal"
        data-target="#modal-default{{ $item->id_produk }}">
        Hapus
    </button>

    {{-- modal hapus --}}

    <div class="modal fade" id="modal-default{{ $item->id_produk }}">
        <form action="/produk-adm/{{ $item->id_produk }}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="id_produk" value="{{ $item->id_produk }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title ">Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin anda ingin menghapus data? Data tidak akan kembali ketika
                            sudah
                            dihapus.</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger" value="hapus">Hapus
                            Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>



    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>

    <script>
        function PreviewImage() {

            const image = document.querySelector('#uploadgambar');

            const imgpreview = document.querySelector('.img-preview');

            imgpreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(uploadgambar.files[0])

            oFReader.onload = function(oFREvent) {
                imgpreview.src = oFREvent.target.result;
            }


        }

        function PreviewImageUpdate() {

            const image = document.getElementById('updategambar');

            const imgpreview = document.getElementsByClassName('img-preview');

            imgpreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(uploadgambar.files[0])

            oFReader.onload = function(oFREvent) {
                imgpreview.src = oFREvent.target.result;
            }

        }
    </script>
@endsection
