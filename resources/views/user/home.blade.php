@extends('user.layouts.mainuser')

@section('container')
    <div class="container-fluid">
        <div class="konten-header-home text-center">
        </div>
    </div>
    <div class="row hero">
        <div class="col-md-9 carousel-isi ">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel/slide 1.jpg" class="d-block carousel-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/slide 2.jpg" class="d-block carousel-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/slide 3.jpg" class="d-block carousel-img" alt="...">
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
        <div class="col-md-3 ">
            <img src="img/potrait-open.jpg" class="gambar-hero" alt="">
        </div>

    </div>
    {{-- Isi Produk --}}
    <div class="content-produk text-center">
        <h1 style="font-weight : bold;">Produk Kami</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In soluta illum sit eius, tenetur dolor impedit animi
            quaerat minima adipisci voluptas nulla quos magni accusamus? Non modi necessitatibus consequatur, deserunt
            eligendi recusandae saepe natus eaque. Aspernatur aliquam quis alias facilis commodi consequuntur numquam vitae
            velit hic at minima, iusto neque? Necessitatibus soluta deleniti aliquam fugit facere molestiae, repellat fuga
            qui neque cum perspiciatis unde delectus aspernatur quidem quod, natus non. Possimus eum mollitia velit
            blanditiis quia sequi fugiat commodi hic.</p>
    </div>

    {{-- isi Custom --}}
    <div class="content-custom text-center">
        <h1 style="font-weight : bold;">Mau Custom?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In soluta illum sit eius, tenetur dolor impedit animi
            quaerat minima adipisci voluptas nulla quos magni accusamus? Non modi necessitatibus consequatur, deserunt
            eligendi recusandae saepe natus eaque. Aspernatur aliquam quis alias facilis commodi consequuntur numquam vitae
            velit hic at minima, iusto neque? Necessitatibus soluta deleniti aliquam fugit facere molestiae, repellat fuga
            qui neque cum perspiciatis unde delectus aspernatur quidem quod, natus non. Possimus eum mollitia velit
            blanditiis quia sequi fugiat commodi hic.</p>
    </div>
@endsection
