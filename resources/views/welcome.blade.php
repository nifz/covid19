<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="dicoding:email" content="gooneps@gmail.com">
        <title>Covid Update Indonesia</title>
        <link rel="icon" type="image/png" href="./assets/img/brand/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/datatables/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/datatables/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/datatables/css/select.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/argon.css')}}">
    </head>
    <body class="antialiased">
          <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light py-2">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="/">
                <img src="./assets/img/brand/blue.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="./assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">
                            <span class="nav-link-inner--text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#protokol" class="nav-link">
                            <span class="nav-link-inner--text">Protokol Kesehatan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#data" class="nav-link">
                            <span class="nav-link-inner--text">Data Provinsi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#peta" class="nav-link">
                            <span class="nav-link-inner--text">Peta Sebaran</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home" class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default"></div>
        <div class="container py-lg-md d-flex">
            <div class="col px-0">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="display-4 text-white text-uppercase">Informasi Tentang
                            <span class="text-uppercase">corona virus disease 2019</span>
                        </h1>
                        <p class="lead text-white">
                            Covid-19 adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6 my-3">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="h7 text-uppercase text-muted mb-0">Total Positif</h5>
                                                <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->total->jumlah_positif) }}</span>
                                            </div>
                                            <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                                <i class="ni ni-fat-add"></i>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="h7 text-uppercase text-muted mb-0">Total Dirawat</h5>
                                                <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->total->jumlah_dirawat) }}</span>
                                            </div>
                                            <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                <i class="ni ni-ambulance"></i>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="h7 text-uppercase text-muted mb-0">Total Sembuh</h5>
                                                <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->total->jumlah_sembuh) }}</span>
                                            </div>
                                            <div class="col-auto">
                                            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="h7 text-uppercase text-muted mb-0">Total Meninggal</h5>
                                                <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->total->jumlah_meninggal) }}</span>
                                            </div>
                                            <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="ni ni-sound-wave"></i>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="section section-lg pt-lg-0 mt--200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="pb-3 px-3">
                    <div class="card">
                        <div class="card-header">
                            <span class="font-weight-bold">Terakhir diperbaharui: </span>
                            <span>{{ date('l, d F Y H:i', strtotime($update->update->penambahan->created))." WIB" }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row row-grid">
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon2 icon-shape icon-shape-primary rounded-circle">
                                                <i class="ni ni-fat-add"></i>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <h6 class="text-primary">Kasus Positif</h6>
                                            <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->penambahan->jumlah_positif) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon2 icon-shape icon-shape-warning rounded-circle">
                                                <i class="ni ni-ambulance"></i>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <h6 class="text-warning">Kasus Dirawat</h6>
                                            <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->penambahan->jumlah_dirawat) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon2 icon-shape icon-shape-success rounded-circle">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <h6 class="text-success">Kasus Sembuh</h6>
                                            <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->penambahan->jumlah_sembuh) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon2 icon-shape icon-shape-danger rounded-circle">
                                                <i class="ni ni-sound-wave"></i>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <h6 class="text-danger">Kasus Meninggal</h6>
                                            <span class="h3 font-weight-bold mb-0">{{ number_format($update->update->penambahan->jumlah_meninggal) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="protokol">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="h2">Protokol Kesehatan 3M</div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <img src="./assets/img/icons8-wash-your-hands-100.png" class="img-thumbnail rounded-circle" alt="">
                        <div class="text-uppercase mt-2">Mencuci tangan</div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="./assets/img/icons8-protection-mask-100.png" class="img-thumbnail rounded-circle" alt="">
                        <div class="text-uppercase mt-2">Memakai masker</div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="./assets/img/icons8-standing-man-100.png" class="img-thumbnail rounded-circle" alt="">
                        <div class="text-uppercase mt-2">Menjaga jarak</div>
                    </div>
                </div>
        </div>
    </section>
    <section id="data">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3">
                    <div class="card">
                        <div class="card-header">
                            <p class="text-sm mb-0">
                                Wilayah yang terpapar Covid-19
                            </p>
                        </div>
                        <div class="card-body" style="padding: 2em .5em;">
                            <div class="table-responsive">
                                <table class="table table-flush" id="datatable-basic">
                                    <thead class="thead-light">
                                        <tr>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Provinsi</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Kasus</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Dirawat</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Sembuh</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Meninggal</th>
                                            <th colspan="2"style="text-align:center">Jenis Kelamin</th>
                                        </tr>
                                        <tr>
                                            <th>Laki&nbsp;Laki</th>
                                            <th>Perempuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data->list_data as $d)
                                            <tr>
                                                <td>{{ $d->key }}</td>
                                                <td>{{ number_format($d->jumlah_kasus) }}</td>
                                                <td>{{ number_format($d->jumlah_dirawat) }}</td>
                                                <td>{{ number_format($d->jumlah_sembuh) }}</td>
                                                <td>{{ number_format($d->jumlah_meninggal) }}</td>
                                                @foreach($d->jenis_kelamin as $jk)
                                                    <td>{{ number_format($jk->doc_count) }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="peta">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://data.covid19.go.id/public/index.html" frameborder="0" width="100%" height="7050" scrolling="no" style="overflow:hidden;"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section>
        <hr class="pt-4">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="text-center">Copyright 2020. Template by <a href="https://www.creative-tim.com/product/argon-design-system?_ga=2.176642597.1056155766.1608204993-675607850.1608204993">Argon Design System (Creative Tim)</a> <br> API & Peta Sebaran by covid19.go.id (Open Source) </div>
            </div>
        </div>
    </section>
    
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/popper/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/vendor/headroom/headroom.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('assets/js/argon.js')}}"></script>
        <script>
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {
            
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();
            
                  // Store hash
                  var hash = this.hash;
            
                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                  });
                } // End if
              });
            });
        </script>
    </body>
</html>
