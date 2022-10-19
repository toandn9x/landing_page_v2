<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Detail</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <base href="{{ asset('') }}">
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
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/amiko" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
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
                <ul>
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
                    <li class="dropdown"><a href="#"><span class="d2">Tool & Resource</span></a>
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
                            href="https://www.aliveandthrive.org/en/research-and-learning">Research
                            & Learning</a></li>
                </ul>
                <ul class="nav-left">
                    <li class="active">ENG</li>
                    <li>FR</li>
                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>


    </header><!-- End Header -->

    <main id="main">
        <section id="newsdetail" class="news-detail-wrapper text-center">
            <div class="container p-0">
                <div class="col-lg-1 d-block m-auto">
                    <img src="assets/img/user.png" />
                </div>
                <p class="post-by">Post by <a>{{ $detail->creator }}</a></p>
                <span class="spl-on-time"> <i class="fa-solid fa-clock"></i>
                    {{ $detail->created_at }}</span>
                <div class="col-lg-8 m-auto d-block">
                    <h2 class="detail-title freight-title">{{ $detail->description }}</h2>
                </div>
                <div class="col-lg-12 m-auto">
                    <img class="img-detail" src="assets/img/{{ $detail->img }}" />
                </div>
                <div class="col-lg-12 m-auto news-desc px-5">
                    <p class="desc">
                        {!! $detail->content !!}
                    </p>
                </div>
                <br><br><br><hr>
                    <h2 class="read-more freight-title">read other news</h2>
                </div>
                <div class="col-lg-12 row m-auto px-5">
                    @foreach($other as $ot)
                        <div class="col-lg-3 suggestion-bottom">
                            <a href="{{ route('detail', $ot->id) }}"><img src="assets/img/{{ $ot->img }}" /></a>
                            <p><a href="{{ route('detail', $ot->id) }}">{{ $ot->description }}</a></p>
                            <span class="spl-on-time"> <i class="fa-solid fa-clock"></i>
                                {{ $ot->created_at }}</span>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
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
                <img src="assets/img/footer-img.png" />
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
                        <img src="images/{{ $setting->bg_img }}" />
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