@extends('user.layouts.mainuser')

@section('container')
    <div class="container-custom" style="max-width: 100%;overflow-x: hidden">
        <div class="header-custom text-center">
            <h1 style="font-weight: bold">Pesan Kaos Huts Apparel</h1>
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
                                <input type="text" class="form-control" id="nama_project"
                                    placeholder="Masukkan Deskripsi Singkat">
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Ukuran Kaos<span class="text-danger"
                                        style="font-weight: bold;">*</span>></h5>
                                <ul class="list-group mt-2">
                                    <li class="list-group-item d-flex">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Small (45 x 67)
                                        <input type="number" name="jmlpesanan" id="jmlpesanan1" onchange="edit(this.value)"
                                            class="ms-2" style="width:50px;">
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Medium (48 x 69) <input type="number" name="jmlpesanan" id="jmlpesanan2"
                                            class="ms-2" style="width:50px;">
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Large (52 x 73)
                                        <input type="number" name="jmlpesanan" id="jmlpesanan3" class="ms-2"
                                            style="width:50px;">
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        X Large (54 x 75)(+Rp 5.000)
                                        <input type="number" name="jmlpesanan" id="jmlpesanan" class="ms-2"
                                            style="width:50px;">
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        XX Large (57 x 77)(+Rp 10.000)
                                        <input type="number" name="jmlpesanan" id="jmlpesanan" class="ms-2"
                                            style="width:50px;">
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        XXX Large (60 x 80)(+Rp 10.000)
                                        <input type="number" name="jmlpesanan" id="jmlpesanan" class="ms-2"
                                            style="width:50px;">
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Upload File Desain (ZIP/RAR)<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <small>(Jika tidak mempunyai desain bisa order desain melalui contact yang
                                    tertera)</small><br>
                                <button type="button" class="btn btn-block bg-primary bg-gradient btn-lg text-light">Upload
                                    File</button>
                            </div>
                            <div class="form-group mb-3">
                                <h5 for="nama_customer">Deadline Produksi<span class="text-danger"
                                        style="font-weight: bold;">*</span></h5>
                                <small>(Deadline produksi standar kami adalah 20 hari setelah semua disepakati)</small><br>
                                {{-- <form class="row">
                                    <label for="date" class="col-1 col-form-label">Date</label>
                                    <div class="col-5">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" id="date" />
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div> --}}
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
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Lengan Pendek
                                        <input type="number" name="jmlpesanan" id="jmlpesanan" class="ms-2"
                                            style="width:50px;">
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="">
                                        Lengan Panjang (+Rp5.000)
                                        <input type="number" name="jmlpesanan" id="jmlpesanan" class="ms-2"
                                            style="width:50px;">
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
                                <td>: 24</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="font-weight:bold">Total Harga</td>
                                <input type="hidden" id="total_harga" value="1400000">

                                <td id="display_total">: Rp. 1.440.000,00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row" style="font-family: 'Arial Narrow Bold', sans-serif;">
                        <a href="#" onclick="konfirm()"
                            class="konfirmasi-custom btn btn-primary bg-gradient p-3 m-2">Konfirmasi Pesanan</a>
                    </div>
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
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
            var y = document.getElementById('jmlpesanan1').value + document.getElementById('jmlpesanan2').value +
                document.getElementById('jmlpesanan3').value;
            console.log(y);
            if (y < 24) {
                alert("Minimal 24");
            }
        }

        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection