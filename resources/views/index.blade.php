<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f546f235e.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/amiko" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.8.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container header-wrapper">
            <a class="logo mx-auto d-block" href="{{ route('indexx') }}"><img src="images/{{ $setting->logo_img }}" alt=""></a>
            <nav id="navbar" class="navbar order-last order-lg-0 m-auto b-block">
                <ul class="nav-right">
                    <li class="dropdown"><a href="#"><span>About Us</span></a>
                        <ul>
                            <li><a href="https://www.aliveandthrive.org/en/what-we-do" target="_blank">What we do</a>
                            </li>
                            <li><a href="https://www.aliveandthrive.org/en/how-we-work" target="_blank">How we work</a>
                            </li>
                            <li><a href="https://www.aliveandthrive.org/en/where-we-work" target="_blank">Where we
                                    work</a></li>
                            <li><a href="https://www.aliveandthrive.org/en/who-we-are" target="_blank">Who we are</a>
                            </li>
                        </ul>
                    </li>
                    <li class="ml-10px"><a class="nav-link scrollto"
                            href="https://www.aliveandthrive.org/en/news">News</a>
                    </li>
                    <li class="dropdown"><a href="#"><span class="d2">Tools & Resources</span></a>
                        <ul>
                            <li><a href="https://www.iycfhub.org/" target="_blank">IYCF E-LEARNING COURSE</a></li>
                            <li><a href="https://www.aliveandthrive.org/en/the-new-cost-of-not-breastfeeding-tool"
                                    target="_blank">COST
                                    OF NOT BREASTFEEDING</a></li>
                            <li><a href="https://www.aliveandthrive.org/en/centers-of-excellence-for-breastfeeding"
                                    target="_blank">CENTERS
                                    OF EXCELLENCE</a></li>
                            <li><a href="https://www.aliveandthrive.org/en/bms-code" target="_blank">BMS CODE</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span class="d3">Inspire</span></a>
                        <ul>
                            <li><a href="https://www.aliveandthrive.org/en/inspire/welcome-to-inspire"
                                    target="_blank">WELCOME TO
                                    INSPIRE</a></li>
                            <li><a href="https://www.aliveandthrive.org/en/inspire/inspire-contributors"
                                    target="_blank">CONTRIBUTORS</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto"
                            href="https://www.aliveandthrive.org/en/research-and-learning">Research & Learning</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul class="nav-left">
                    <li class="active">ENG</li>
                    <li>FR</li>
                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                </ul>

            </nav><!-- .navbar -->
        </div>


    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 row container" id="banner">
                        <!-- <div class="col-lg-6 banner-left text-center">
                            <img src="assets/img/frame1.png" />
                            <div class="slogan">
                                <h3 class="freight-title">Centers of excellence
                                </h3>
                                <p class="freight-title">for breastfeeding</p>
                            </div>
                        </div>
                        <div class="col-lg-6 banner-right">
                            <img class="img-full" src="assets/img/banner.png" />

                        </div> -->
                        <div class="delay-logo">
                            <img src="./assets/img/logo2.png" />
                        </div>

                    </div>
                    <div class="col-lg-12 my-3 px-0">
                        <ul class="nav nav-tabs d-flex">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Overview</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Progress & result</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Implementation resources</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Spotlights</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 px-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h2 class="freight-title">{{ $overview->title1 }}</h2>
                                <div class="tab-pane-content">
                                    <div class="col-lg-8 col-12">
                                        <p>{!! $overview->content1 !!}
                                        </p>
                                    </div>
                                    <div class="col-lg-4 px-10 img-on-top d-flex col-12">
                                        <img src="assets/img/frame1.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <!-- ======= Featured Services Section ======= -->
                                <section id="featured-services" class="featured-services">

                                    <div class="container px-0" data-aos="fade-up">
                                        <div class="section-title">
                                            <h2 class="freight-title">{{ $overview->title2 }}
                                            </h2>
                                            <p>{!! $overview->content2 !!}</p>
                                        </div>
                                        <div class="row container mx-0">
                                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                                    <img class="excellent-img" src="assets/img/{{ $overview->img1 }}" />
                                                    <p class="description text-center">{{ $overview->text_img1 }}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                    <img class="excellent-img" src="assets/img/{{ $overview->img2 }}" />
                                                    <p class="description text-center">{{ $overview->text_img2 }}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                                                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                                    <img class="excellent-img" src="assets/img/{{ $overview->img3 }}" />
                                                    <p class="description text-center">{{ $overview->text_img3 }}</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </section><!-- End Featured Services Section -->

                                <!-- ======= About Us Section ======= -->
                                <section id="about" class="about">
                                    <div class="container px-0" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-lg-12 mb-10">
                                                <!-- <img class="img-full" src="assets/img/sch.png" /> -->
                                                <iframe class="img-full"
                                                    src="{{ $overview->link }}?autoplay=1&mute=1">
                                                </iframe>
                                            </div>
                                            <div class="pt-5 d-flex">
                                                <div class="col-lg-6 question-wrapper col-12" data-aos="fade-right">
                                                    <img src="assets/img/{{ $overview->img4 }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-lg-6 pt-lg-0 content p-5 qs-content col-12"
                                                    data-aos="fade-left">
                                                    <h1 class="pt-5 freight-title">{{ $overview->title3 }}</h1>
                                                    <p>
                                                        {!! $overview->content3 !!}
                                                    </p>
                                                    <button class="btn coe-btn"><a
                                                            href="https://www.aliveandthrive.org/sites/default/files/coe-faq_final.pdf"
                                                            target="_blank">Detail <i
                                                                class="fa-solid fa-chevron-right "></i></a></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section><!-- End About Us Section -->

                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="col-lg-12 col-12 progress-banner">
                                    <img src="assets/img/{{ $progess->img1 }}" />
                                    <p>{!! $progess->content1 !!}
                                    </p>
                                </div>
                                <!-- <div class="col-lg-12 row progress-result-wrapper m-auto">
                                    <div class="col-lg-6 img-left">
                                        <img src="assets/img/est.jpg" />
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <h2>By estimation</h2>
                                        <h2>One in five babies in
                                        </h2>
                                        <h2>
                                            Viet Nam is born in a </h2>
                                        <h2>Center of Excellence for Breastfeeding.</h2>
                                    </div>
                                </div> -->
                                <div class="col-lg-12 area-wrapper">
                                    <div class="col-lg-12 m-auto">
                                        <h4 class="text-center country-zone freight-title">{{ $progess->title2 }}
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 m-auto worlds-map">
                                        <img src="assets/img/{{ $progess->img2 }}" />
                                    </div>
                                    <div class="col-lg-12 row m-auto cnt">
                                        <div class="col-lg-4">
                                            <nav class="navbar order-last order-lg-0 area-selector">
                                                <ul class="country-list country-flag">
                                                    <li class="dropdown"><a><span>Southeast Asia</span> <i
                                                                class="bi bi-chevron-down"></i></a>
                                                        <ul>
                                                            <li><button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="false"
                                                                    aria-controls="collapseOne">
                                                                    <img src="assets/img/vn.png" /><a href="#">Viet
                                                                        Nam</a></button>
                                                            </li>
                                                            <li><button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo"><img
                                                                        src="assets/img/lao.png" /><a
                                                                        href=" #">Laos</a></button>
                                                            </li>
                                                            <li><button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseThree"><img
                                                                        src="assets/img/mr.png" /><a
                                                                        href=" #">Myanmar</a></button>
                                                            </li>
                                                            <li><button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour" aria-expanded="false"
                                                                    aria-controls="collapseFour"><img class="mx-2"
                                                                        src="assets/img/cam.png" /><a
                                                                        href=" #">Cambodia</a></button>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="col-lg-4">
                                            <nav class="navbar order-last order-lg-0 area-selector">
                                                <ul class="country-list asia">
                                                    <li class="dropdown"><a><span>Others</span> <i
                                                                class="bi bi-chevron-down"></i></a>
                                                        <ul>
                                                            <li><a href="#">West and Central Africa
                                                                </a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="col-lg-12 m-auto desc-service mt-5">
                                                        <img src="assets/img/{{ $progess->img3 }}" class="d-block w-100" alt="...">
                                                        <div class="content-service">
                                                            <h2 class="freight-title">{{ $progess->title3 }}</h2>
                                                            <p>{!! $progess->content3 !!}</p>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12 vn-info col-12">
                                                        <div class="vn-info-title m-auto text-center">
                                                            <h2 class="freight-title">List of provinces
                                                                enrolled in the Center of Excellence
                                                                for Breastfeading initiative in VietNam</h2>
                                                        </div>
                                                        <img src="./assets/img/vni.png" />
                                                        <div class="vn-info-title m-auto text-center">
                                                            <p>Disclaimer: The map does not
                                                                reflect a position by agengencies on the legal status of
                                                                any country or area or the delimitation of any frontiers
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 row list-img m-auto mt-5">
                                                        <div class="col-lg-7 row">
                                                            <div class="col-left col-lg-6">
                                                                <div class="col-lg-12">
                                                                    <img src="assets/img/{{ $progess->img4 }}" />
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <img src="assets/img/{{ $progess->img5 }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-right mt-5 col-lg-6">
                                                                <div class="col-lg-12">
                                                                    <img src="assets/img/{{ $progess->img6 }}" />
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <img src="assets/img/{{ $progess->img7 }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 center-list-wrapper p-10">
                                                            <h3 class="freight-title">{{ $progess->title4 }}</h3>
                                                            <div class="center-list">
                                                                @php
                                                                    if($progess->content4) {
                                                                        $list = explode("|",$progess->content4);
                                                                    }

                                                                @endphp
                                                                <ul>
                                                                    @if(isset($list))
                                                                        @foreach($list as $key => $l)
                                                                            <li>
                                                                                <p>{{ $key + 1 }}. {{ $l }}</p>
                                                                            </li>
                                                                        @endforeach
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 learn-more-exp m-auto text-center">
                                                            <h3 class="freight-title">Get to know mothers' experience at
                                                                Centers
                                                                of
                                                                Excellence for
                                                                Breastfeeding
                                                            </h3>
                                                            <button class="m-auto coe-btn">Check now!<i
                                                                    class="fa-solid fa-chevron-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="col-lg-12 m-auto desc-service mt-5">
                                                        <img src="assets/img/{{ isset($progess->img8) ? $progess->img8 : '' }}" class="d-block w-100" alt="...">
                                                        <div class="content-service">
                                                            <h2 class="freight-title">{{ isset($progess->title8) ? $progess->title8 : '' }}</h2>
                                                            <p>{{ isset($progess->content8) ? $progess->content8 : '' }}</p>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-10 row list-img m-auto">
                                                        <div class="col-lg-4 row">
                                                            <div class="col-lg-12 laos-img">
                                                                <img src="assets/img/{{ isset($progess->img9) ? $progess->img9 : '' }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 center-list-wrapper p-10">
                                                            <h3 class="freight-title">{{ isset($progess->title9) ? $progess->title9 : '' }}</h3>
                                                            <div class="center-list">
                                                                @php
                                                                    if(isset($progess->content9)) {
                                                                        $list = explode("|",$progess->content9);
                                                                    }

                                                                @endphp
                                                                <ul>
                                                                    @if(isset($list))
                                                                        @foreach($list as $key => $l)
                                                                            <li>
                                                                                <p>{{ $key + 1 }}. {{ $l }}</p>
                                                                            </li>
                                                                        @endforeach
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row col-lg-12">
                                                            <div class="col-lg-5">
                                                                <img src="assets/img/{{ isset($progess->img10) ? $progess->img10 : '' }}" />
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <img src="assets/img/{{ isset($progess->img11) ? $progess->img11 : '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="col-lg-12 row resources-wrapper m-0 w-100">
                                    <div class="col-lg-6 px-5 resource-card">
                                        <div class="col-lg-6 card-titles m-auto">Overview</div>
                                        <ul>
                                            <li><a href="https://www.aliveandthrive.org/sites/default/files/attachments/CoE-BF-Brief_ENG_19.8.2019.pdf"
                                                    target="_blank">Brief</a></li>
                                            <li><a href="https://www.aliveandthrive.org/sites/default/files/coe-faq_final.pdf"
                                                    target="_blank">FAQs</a></li>
                                            <li><a href="https://thuvienphapluat.vn/van-ban/The-thao-Y-te/Quyet-dinh-5913-QD-BYT-2021-Tieu-chi-danh-gia-Benh-vien-thuc-hanh-nuoi-con-bang-sua-me-499144.aspx"
                                                    target="_blank">Legal framework</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 px-5 resource-card">
                                        <div class="col-lg-7 card-titles m-auto">Coaching materials</div>
                                        <ul>
                                            <li>
                                                <a target="_blank"
                                                    href="https://www.aliveandthrive.org/en/resources/tot-coaching-on-early-essential-newborn-care-for-breathing-and-non-breathing-babies-0">Early
                                                    Essential Newborn Care</a>

                                            </li>
                                            <li> <a href="https://www.aliveandthrive.org/en/resources/family-friendly-birthing-rooms"
                                                    target="_blank">Family
                                                    Friendly Birthing Room</a></li>
                                            <li> <a href=""">Caesarean birth</a></li>
                                        </ul>
                                    </div>
                                    <div class=" col-lg-6 px-5 resource-card">
                                                    <div class="col-lg-7 card-titles m-auto">Brand guidelines</div>
                                                    <ul>
                                                        <li><a href="https://fhi360web.sharepoint.com/sites/FHI360A%26TSEA/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FFHI360A%26TSEA%2FShared%20Documents%2FGeneral%2FA%26T%20SEA%20Knowledge%20Hub%2F2%2E%20Communications%20%26%20Documentation%2F2%2E1%20Guidelines%2FLogo%20files%2FCoE%20Viet%20Nam%2FCoE%20branding%20guidelines%5FFULL%2Epdf&parent=%2Fsites%2FFHI360A%26TSEA%2FShared%20Documents%2FGeneral%2FA%26T%20SEA%20Knowledge%20Hub%2F2%2E%20Communications%20%26%20Documentation%2F2%2E1%20Guidelines%2FLogo%20files%2FCoE%20Viet%20Nam&p=true&wdLOR=c59252D9E%2D8893%2DB747%2D8FA2%2D7A5D85FBF52A&ga=1"
                                                                target="_blank">Logo & brand guidelines</a></li>
                                                        <li><a href="https://fhi360web.sharepoint.com/sites/FHI360A%26TSEA/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FFHI360A%26TSEA%2FShared%20Documents%2FGeneral%2FA%26T%20SEA%20Knowledge%20Hub%2F2%2E%20Communications%20%26%20Documentation%2F2%2E1%20Guidelines%2FLogo%20files%2FCoE%20Viet%20Nam%2FCoE%20branding%20guidelines%5FFULL%2Epdf&parent=%2Fsites%2FFHI360A%26TSEA%2FShared%20Documents%2FGeneral%2FA%26T%20SEA%20Knowledge%20Hub%2F2%2E%20Communications%20%26%20Documentation%2F2%2E1%20Guidelines%2FLogo%20files%2FCoE%20Viet%20Nam&p=true&wdLOR=c94195245%2D44A3%2D0F4E%2DA6AF%2D4A114409FE01&ga=1"
                                                                target="_blank"></a>Signboard and certification
                                                            templates</li>
                                                    </ul>
                                    </div>
                                    <div class="col-lg-6 px-5 resource-card">
                                        <div class="col-lg-6 card-titles m-auto">Job aids</div>
                                        <ul>
                                            <li><a href="https://www.aliveandthrive.org/en/resources/posters-on-breastfeeding-no-formula-complementary-feeding-and-the-first-1000-days"
                                                    target="_blank">Breastfeeding</a></li>
                                            <li>Early Essential Newborn Care</li>
                                            <li>Family Friendly Birthing Room</li>
                                            <li><a href="https://fhi360web-my.sharepoint.com/personal/vduong_fhi360_org/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fvduong%5Ffhi360%5Forg%2FDocuments%2F1%2E%20CoE%2F000%2E%20Replication%2F1%2E%20CoE%20training%2F4%2E%20Giam%20SM&ga=1"
                                                    target="_blank">Caesarean birth</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 px-5 resource-card">
                                        <div class="col-lg-8 card-titles m-auto">Media & Communications</div>
                                        <ul>
                                            <li><a href="https://www.youtube.com/watch?v=F9f6Nidxnig&list=PL3rKNU-jWPSTb321p8NjaiQESemtcjHDW"
                                                    target="_blank"></a>Promotional & documentary videos</li>
                                            <li>Designation materials</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 px-5 resource-card">
                                        <div class="col-lg-8 card-titles m-auto">setting-up & operation</div>
                                        <ul>
                                            <li><a href="https://fhi360web.sharepoint.com/sites/FHI360A%26TSEA/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FFHI360A%26TSEA%2FShared%20Documents%2FGeneral%2FA%26T%20SEA%20Knowledge%20Hub%2F5%2E%20Program%20Implementation%2FC%2E%20Countries%2FViet%20Nam%2FCOE%2F000%2E%20Replication%2F0%2E%20CoE%20orientation%2FMau%20cong%20van%20cho%20SYT&p=true&ga=1"
                                                    target="_blank">Template documents to kick start COE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                @php
                                    $chosen_article = $sportlight->shift();
                                @endphp
                                <div class="row spotlights-content">
                                    <div class="col-lg-7 spl-left">
                                        <div class="col-lg-12">
                                            <h2 class="line-top freight-title">Featured stories</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <img src="assets/img/{{ $chosen_article->img }}" />
                                            </div>
                                            <div class="col-lg-5">
                                                <a class="spl-title" href="{{ route('detail',['id' => $chosen_article->id]) }}">{{ mb_strimwidth($chosen_article->description, 0, 200, "...") }}</a>
                                                <span class="d-block spl-on-time"> <i class="fa-solid fa-clock"></i>
                                                    {{ $chosen_article->created_at }}</span>
                                                <a href="{{ route('detail',['id' => $chosen_article->id]) }}" class="btn btn-more coe-btn">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 spl-right">
                                        <h2 class="col-lg-12 line-top freight-title">News</h2>
                                        @foreach($sportlight as $new)
                                            <div class="row col-lg-12 mb-3 suggestion-news">
                                                <div class="col-lg-3 img-news">
                                                    <img src="assets/img/{{ $new->img }}" />
                                                </div>
                                                <div class="col-lg-9">
                                                    <a class="spl-title" href="{{ route('detail',['id' => $new->id]) }}">{{ mb_strimwidth($new->description, 0, 200, "...") }}</a>
                                                    <span class="spl-on-time"> <i class="fa-solid fa-clock"></i>
                                                    {{ $new->created_at }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </section><!-- End Departments Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="col-lg-12 new-letter-wrapper m-0 row justify-content-center">
            <div class="col-lg-9 px-5">
                <h3 class="freight-title">Join Our NewsLetter</h3>
            </div>

            <div class="col-lg-6 px-5">
                <form>
                    <div class="col-lg-12">
                        <label for="email" class="form-label email">Email address</label>
                        <input type="text" name="email" class="form-control" id="name" placeholder="Email" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="name" placeholder="First Name"
                                required>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="name" placeholder="Last Name"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-3">
                        <button id="submitInfo" class="coe-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 img-footer">
                <img src="images/{{ $setting->bg_img }}" />
            </div>
        </div>
        <div class="footer-top">
            <div class="container px-0">
                <div class="row">
                    <div class="col-lg-3 col-md-3 m-auto">
                        <div class="footer-info">
                            <div class="social-links">
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <p class="mt-2">Copyright 2022 Alive & Thrive</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links d-flex footer-img">
                        <img src="assets/img/fhi.png" />
                    </div>

                    <div class="col-lg-7 col-md-6 footer-links m-auto">
                        <ul class="d-flex">
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Our Data</a></li>
                            <li><a href="#">Procurment & Solicitation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>