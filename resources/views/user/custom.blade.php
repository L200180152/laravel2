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
                <div class="col-md-6 form-custom p-2" style=" border-radius:20px">
                    <h5 class="ms-2">Produksi/Pemesanan Kaos</h5>
                    <form>
                        <div class="card-body bg-warning border border-danger rounded ms-2" style="font-weight: bold;">
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Nama Project<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <input type="text" class="form-control" id="nama_project"
                                    placeholder="Masukkan Nama Project">
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Deskripsi Singkat<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <textarea name="nama_project" id="nama_project" class="form-control" placeholder="Masukkan Deskripsi Singkat"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Ukuran Kaos<span class="text-danger"
                                        style="font-weight: bold;">*</span>></h5>
                                <ul class="list-group mt-2">
                                    {{-- <li class="list-group-item d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Small (45 x 67)
                                        <input type="number" name="uk_S" id="uk_M" value="0"
                                            onchange="edit(this.value)" class="ms-2" style="width:50px;">
                                    </li> --}}
                                    <li class="list-group-item d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Medium (48 x 69)
                                        <input type="number" name="uk_M" id="uk_M" class="ms-2"
                                            style="width:50px;" onchange="edit(this.value)" value="0">

                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Large (52 x 73)
                                        <input type="number" name="uk_L" id="uk_L" class="ms-2" uk_XL
                                            style="width:50px;" onchange="edit(this.value)" value="0">

                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        X Large (54 x 75)
                                        <input type="number" name="uk_XL" id="uk_XL" class="ms-2"
                                            style="width:50px;" value="0">
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Upload File Desain (ZIP/RAR)<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <small>(Jika tidak mempunyai desain bisa order desain melalui contact yang
                                    tertera)</small><br>
                                <button type="file" class="btn btn-block bg-primary bg-gradient btn-lg text-light"
                                    webkitdirectory>Upload
                                    File</button>
                                <input id="input-folder" type="file" webkitdirectory>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Deadline Produksi<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <small>(Deadline produksi standar kami adalah 20 hari setelah semua disepakati)</small><br>
                                <form action="#" class="row">
                                    <div class="col-md-4">
                                        <div class="datepicker">
                                            <input type="text" class="form-control" id="input"
                                                placeholder="Masukkan Tanggal">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Lengan Kaos<span class="text-danger"
                                        style="font-weight: bold;">*</span>></h5>
                                <ul class="list-group mt-2">
                                    <li class="list-group-item d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Lengan Pendek
                                        <input type="number" name="lgnkaospndk" id="lgnkaospndk" class="ms-2"
                                            style="width:50px;" value="0">
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Lengan Panjang (+Rp5.000)
                                        <input type="number" name="lgnkaospnjg" id="lgnkaospnjg" class="ms-2"
                                            style="width:50px;" value="0">
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Model Kaos<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <small>Cotton Combed 30s</small>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Pembayaran --}}
                <div class="col-md-6 p-2">
                    {{-- Form Pembayaran --}}
                    <h5>Harga</h5>
                    <div class="totalharga p-4">
                        <input type="hidden" id="harga_dasar" value="60000">
                        <h2>Rp. 60.000,00/pcs</h2>
                    </div>
                    <hr style="width: 98%">
                    {{-- Detail Pemesanan --}}
                    <table class="table table-striped">
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
                    </div>
                    <input type="hidden">
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

    <script>
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
    </script>
    <script>
        $(document).ready(function() {
            $("#input-folder-1").fileinput({
                browseLabel: 'Select Folder...'
            });
        });
    </script>
@endsection
