@extends('user.layouts.mainuser')

@section('container')
    <div class="container-custom" style="max-width: 100%;overflow-x: hidden">
        <div class="container-fluid">
            <div class="header-custom text-center">
            </div>
        </div>
        <div class="deskripsi-pesankaos p-5">
            <h3><strong>Mohon membaca deskripsi ini sebelum memesan</strong></h3>
            <p>Selain membuat desain untuk kaos kami juga melayani produksi kaos dalam jumlah tertentu. &nbsp;Untuk
                melakukan pemesanan produksi kaos kami silahkan ikuti petunjunjuk berikut ini :</p>
            <p><strong>Bagaimana Cara Pemesanan</strong> :</p>
            <ul>
                <li>Untuk memesan&nbsp;<strong>produksi / pembuatan kaos</strong> silahkan isi form yang tersedia di sebelah
                    kanan.</li>
                <li>Setelah mengisi form tersebut silahkan mengklik &nbsp;&quot;<strong>Add To Cart</strong>&quot;.</li>
                <li>Kemudian klik &quot;<strong>Checkout</strong>&quot; untuk menyelesaikan pesanan anda.</li>
                <li>Isi formulir checkout sesuai dengan data anda dan ikuti step step selanjutnya.</li>
            </ul>
            <p><strong>Catatan</strong>:</p>
            <p>Harga untuk layanan&nbsp;<strong>Produksi / Pembuatan Kaos</strong> ini akan otomatis berubah sesuai dengan
                spesifikasi yang telah and input pada form disamping kanan. Variable yang menentukan perubahan harga untuk
                Produksi / Pembuatan Kaos adalah jumlah kaos pesanan, jumlah titik sablon, ukuran kaos yang di pesan, warna
                dan type bahan yang di gunakan.</p>
            <p>Kami akan mereview dan mengkonfirmasi pesanan yang anda kirimkan. Tim kami akan menghubungi untuk
                mengkonfirmasi pesanan anda melalui email atau telepon.</p>
        </div>
        <hr>
        <div class="konten-custom">
            <div class="row">
                {{-- Form Pemesanan --}}
                <div class="col-md-6 p-5" style=" border-radius:20px">
                    @if (session()->has('berhasil'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('berhasil') }}
                        </div>
                    @elseif(session()->has('gagal'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('gagal') }}
                        </div>
                    @endif

                    <form action="{{ route('pesankaos') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Produksi/Pemesanan Kaos</h5>
                        <small>Pastikan Semua Sudah Terisi dengan benar</small><br>
                        <label>Nama Project<span class="text-danger" style="font-weight: bold;">*</span></label>
                        <input type="text" class="form-control @error('namaproject') is-invalid @enderror"
                            id="namaproject" name="namaproject" placeholder="Masukkan Nama Project">
                        @error('namaproject')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <label class="mt-3">Deskripsi Singkat<span class="text-danger"
                                style="font-weight: bold;">*</span></label>
                        <textarea name="desksingkat" id="desksingkat" class="form-control @error('desksingkat') is-invalid @enderror"
                            placeholder="Masukkan Deskripsi Singkat"></textarea>
                        @error('desksingkat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror


                        @if (Auth::check())
                            <label class="mt-3">Nomor HP<span class="text-danger"
                                    style="font-weight: bold;">*</span></label>
                            <input type="text" class="form-control @error('nohp_cust') is-invalid @enderror"
                                placeholder="nomor hp" value="{{ Auth::user()->nohp_cust }}" id="nohp_cust" name="nohp_cust"
                                readonly>
                            @error('nohp_cust')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <small>Pastikan Nomor HP sudah terisi dibagian profil user</small><br>
                        @else
                        @endif

                        <label class="mt-3">Ukuran Kaos<span class="text-danger"
                                style="font-weight: bold;">*</span></label>
                        <li class="list-group-item d-flex align-items-center">
                            Medium (48 x 69)
                            <input type="text" class="form-control ms-3 @error('uk_M') is-invalid @enderror"
                                name="uk_M" id="uk_M" placeholder="Jumlah" style="width:100px;">
                            @error('uk_M')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            Large (52 x 73)
                            <input type="text" class="form-control ms-3 @error('uk_L') is-invalid @enderror"
                                name="uk_L" id="uk_L" placeholder="Jumlah" style="width:100px;">
                            @error('uk_L')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            X Large (54 x 75)
                            <input type="text" class="form-control ms-3 @error('uk_XL') is-invalid @enderror"
                                name="uk_XL" id="uk_XL" placeholder="Jumlah" style="width:100px;">
                            @error('uk_XL')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </li>

                        <label class="mt-3">Lengan Kaos<span class="text-danger"
                                style="font-weight: bold;">*</span></label>
                        {{-- <li class="list-group-item d-flex align-items-center">
                            Pendek
                            <input type="text" class="form-control ms-3 @error('lgnkaospndk') is-invalid @enderror"
                                name="lgnkaospndk" id="lgnkaospndk" placeholder="Jumlah" style="width:100px;">
                            @error('lgnkaospndk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </li> --}}
                        <li class="list-group-item d-flex align-items-center">
                            Panjang (+5000)
                            <input type="text" class="form-control ms-3 me-2 @error('lgnkaospnjg') is-invalid @enderror"
                                name="lgnkaospnjg" id="lgnkaospnjg" placeholder="Jumlah" style="width:100px;">
                            <small>(sisanya otomatis dihitung sebagai lengan pendek)</small>
                            @error('lgnkaospnjg')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </li>

                        <label class="mt-3">Upload File Desain (ZIP/RAR)<span class="text-danger"
                                style="font-weight: bold;">*</span></label>
                        <small>(Jika tidak mempunyai desain bisa order desain melalui contact yang
                            tertera)</small><br>
                        <input type="file" class="@error('uploadrar') is-invalid @enderror" id="uploadrar"
                            name="uploadrar">
                        @error('uploadrar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="form-group mt-3 mb-3">
                            <label>Jenis Sablon<span class="text-danger" style="font-weight: bold;">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenissablon" id="rubber"
                                    value="Rubber" checked>
                                <label class="form-check-label" for="jenissablon">
                                    Rubber
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenissablon" id="plastisol"
                                    value="Plastisol">
                                <label class="form-check-label" for="jenissablon">
                                    Plastisol
                                </label>
                            </div>
                        </div>

                        @if (Auth::check())
                            <button type="submit" class="btn btn-primary mt-2">Masukkan Pesanan</button>
                        @else
                            <a href="/login" class="btn btn-primary mt-2">Masukkan Pesanan</a>
                        @endif
                    </form>
                </div>
                {{-- Pembayaran --}}
                <div class="col-md-6 p-2">
                    {{-- Form Pembayaran --}}
                    <h5>Harga</h5>
                    <div class="totalharga p-4">
                        <input type="hidden" id="harga_dasar" value="60000">
                        <h2>Rp. 60.000,00/pcs</h2>
                        <small>(Harga belum pasti, Bisa berubah tergantung kerumitan desain)</small>
                    </div>
                    {{-- <hr style="width: 98%"> --}}
                    {{-- Detail Pemesanan --}}
                    {{-- <table class="table table-striped">
                    <thead>
                        <tr>
                            <h5>Detail Pemesanan</h5>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight:bold">Jumlah</td>
                            <td></td>
                            <td>: 0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-weight:bold">Total Harga</td>
                            <input type="hidden" id="total_harga" value="1400000">
                            <td id="display_total">0</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row" style="font-family: 'Arial Narrow Bold', sans-serif;">
                    <a href="#" onclick="konfirm()"
                        class="konfirmasi-custom btn btn-primary bg-gradient p-3 m-2">Konfirmasi Pesanan</a>
                </div> --}}

                    {{-- Carousel --}}
                    <div class="carousel-pricelist">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/pricelist/jaket.png" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/pricelist/kaos.png" class="d-block img-fluid" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    {{-- <script>
        function edit(value) {
            console.log('test');
            var x = value * document.getElementById('harga_dasar').value;
            document.getElementById('total_harga').value = x;
            document.getElementById('display_total').innerHTML = ": Rp. " + new Intl.NumberFormat().format(x) + ",00"
        }

        function konfirm() {
            var y = document.getElementById('uk_M').value + document.getElementById('uk_L').value +
                document.getElementById('uk_XL').value;
            console.log(y);
            if (y < 24) {
                alert("Minimal 24");
            }
        }

        $(function() {
            $('#datepicker').datepicker();
        });
    </script> --}}
@endsection
