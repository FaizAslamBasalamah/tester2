@include('layout.main-layout')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landingpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/landingpage.css" rel="stylesheet">
  </head>
  <style>
    span{
    background: url('images/image 1.png');
}
  </style>

  <body>
    <span class="d-block p-5">
        <p class="fs-4 fw-bolder ms-2"style="color:#AA8B56">Bagi Barang</p>
        <p class="fs-3 fw-bolder ms-2"style="color:#395144;">Setiap Donasi<br>membawa Perubahan</p>
        <p class="fs-6  ms-2"style="color:#4D4536;">Donasi Anda dapat membantu mengubah kehidupan anak-<br>anak, keluarga, dan komunitas yang kurang mampu.</p>
        <div class="p-2 g-col-6 ms-4">
            <a type="button" class="btn text-light" style="background-color:#AA8B56;" href="/tentangkami"> Tentang Kami</a>
            <a type="button" class="btn text-light" style="background-color:#4E6C50;" href="/registrasi">Daftar Sekarang</a>
        </div>  
    </span>
<!-- Code Mitra Kami -->
    <div class="container text-start mt-3">
        <div class="row g-1">
            <div class="col-2">
            <div class="p-1 fs-3">Mitra Kami</div>
            </div>
            <div class="col-9">
            <div class="p-1 fs-6 mt-2">Lorem Ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac aliquet lorem.</div>
            </div>
        </div>
    </div>
<!-- Gambar" yang bermitra dengan BagiBarang -->
    <div class="container text-center ms-6">
        <div class="row" style="width: 700px;">
            <div class="col">
                <div class="card" style="width: 12rem;">
                    <img src="/images/foto2 landingpage.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 12rem;">
                        <img src="/images/foto2 landingpage.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                            <img src="/images/foto2 landingpage.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn btn-success ms-5 mt-3 me-5" style="width: 150px;">
                    Lainnya
                </div>
            </div>
        </div>
    </div>
<!-- Code dibawah digunakan untuk bagian "Cara Kerja Kami" -->
    <div class="text-center mt-5">
        <p class="fs-2">Cara Kerja Kami</p>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/image 1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/image 1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/image 1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
<!-- Isi Berita tentang Bantuan Donasi -->
    <div id="carouselExampleCaptions" class="carousel slide mt-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/foto2 landingpage.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/foto2 landingpage.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
                <div class="carousel-item">
                <img src="images/foto2 landingpage.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>