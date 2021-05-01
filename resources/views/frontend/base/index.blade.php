<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" style="border-radius: 10px !important;" href="{{ asset('frontend/img/favicon.jpeg') }}">
    <!-- Load Require CSS -->
    <link href="{{asset ('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{asset ('frontend/css/boxicon.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/templatemo.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    @yield('css')
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow" style="background-color: #FAD586 !important;">
        <div class="container d-flex justify-content-between align-items-center" >
            <a class="navbar-brand h1" href="{{ route('frontend.home')}}">
                <i class=''>
                    <img src="{{ asset('frontend/img/WhatsApp Image 2021-04-23 at 5.16.06 PM.png') }}" height="40"  alt="">
                </i>
                <span class="text-dark h4">Kahmi</span> <span class="text-primary h4">Cita</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" style="font-weight: bold; font-size: 18px;" href="{{ route('frontend.home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- Example single danger button -->
                            <div class="dropdown">
                                <button 
                                    class="nav-link btn-outline-transparent rounded-pill px-3 dropdown-toggle" style="font-weight: bold; font-size: 18px;" 
                                    type="button" id="dropdownMenuButton" data-toggle="dropdown" 
                                    aria-haspopup="true" aria-expanded="false"
                                    style="outline: none;"
                                >
                                  Profil
                                </button>
                                <div class="dropdown-menu" id="dropdown-nav" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="{{ route('frontend.home')}}#maksudTujuan">Maksud dan Tujuan</a>
                                  <a class="dropdown-item" href="{{ route('frontend.akta') }}">Akta Yayasan Kahmi</a>
                                  <a class="dropdown-item" href="">Struktur Organisasi</a>
                                </div>
                              </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" style="font-weight: bold; font-size: 18px;" href="{{route('frontend.home')}}#infoKegiatan">Info kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" style="font-weight: bold; font-size: 18px;" href="{{route('frontend.home')}}#artikelBerita">Artikel & Berita</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar align-self-center d-flex justify-self-center">
                <a class="nav-link" href="{{ route('login') }}"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    @yield('content')

    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-5 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class=''>
                            <img src="{{ asset('frontend/img/WhatsApp Image 2021-04-23 at 5.16.06 PM.png') }}" height="40"  alt="">
                        </i>
                        <span class="text-light h5">Kahmi</span> <span class="text-light h5 semi-bold-600">Cita</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Perum Puri Nirwana Gajayana Kav 40 Jl. Simpang Gajayana Merjosari, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Tautan Lainnya</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">Mukadimah</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Maksud dan Tujuan</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Info Kegiatan</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Kontak Kami</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend/js/isotope.pkgd.js') }}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {

            // trigger nav dropdown button
            $('.dropdown-toggle').click(function() {
                if ($('#dropdown-nav').hasClass("show")){
                    $( '#dropdown-nav' ).removeClass('show');
                } else {
                    $( '#dropdown-nav' ).addClass('show');
                }
            });

            // hide dropdown button
            $(document).on("click", function(e) {
                if ($(e.target).is(".dropdown-toggle") === false) {
                    $( '#dropdown-nav' ).removeClass('show');
                }
            });

            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });

            $(".deskripsi-cut").text(function (i, text) {
                return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 97)) + '...' : text;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="{{ asset('frontend/js/templatemo.js')}}"></script>
    <!-- Custom -->
    <script src="{{ asset('frontend/js/custom.js')}}"></script>

    @yield('js')

</body>

</html>