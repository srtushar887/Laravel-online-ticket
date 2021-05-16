<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 May 2021 16:28:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/odometer.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/main.css">

    <link rel="shortcut icon" href="{{asset('assets/frontend/')}}/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
<!-- ==========Preloader========== -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ==========Preloader========== -->
<!-- ==========Overlay========== -->
<div class="overlay"></div>
<a href="#0" class="scrollToTop">
    <i class="fas fa-angle-up"></i>
</a>
<!-- ==========Overlay========== -->

<!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('assets/frontend/')}}/images/logo/logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="contact.html">Home</a>
                </li>
                <li>
                    <a href="contact.html">About Us</a>
                </li>
                <li>
                    <a href="contact.html">All Ticket</a>
                </li>
                <li>
                    <a href="contact.html">Blog</a>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
                <li class="header-button pr-0">
                    <a href="{{route('login')}}">join us</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header-Section========== -->
@yield('front')
<!-- ==========Newslater-Section========== -->
<footer class="footer-section">
    <div class="newslater-section padding-bottom">
        <div class="container">
            <div class="newslater-container bg_img" data-background="{{asset('assets/frontend/')}}/images/newslater/newslater-bg01.jpg">
                <div class="newslater-wrapper">
                    <h5 class="cate">subscribe to Boleto </h5>
                    <h3 class="title">to get exclusive benifits</h3>
                    <form class="newslater-form">
                        <input type="text" placeholder="Your Email Address">
                        <button type="submit">subscribe</button>
                    </form>
                    <p>We respect your privacy, so we never share your info</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="logo">
                <a href="index-1.html">
                    <img src="{{asset('assets/frontend/')}}/images/footer/footer-logo.png" alt="footer">
                </a>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="#0">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#0" class="active">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-area">
                <div class="left">
                    <p>Copyright © 2020.All Rights Reserved By <a href="#0">Boleto </a></p>
                </div>
                <ul class="links">
                    <li>
                        <a href="#0">About</a>
                    </li>
                    <li>
                        <a href="#0">Terms Of Use</a>
                    </li>
                    <li>
                        <a href="#0">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#0">FAQ</a>
                    </li>
                    <li>
                        <a href="#0">Feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ==========Newslater-Section========== -->


<script src="{{asset('assets/frontend/')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/modernizr-3.6.0.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/plugins.js"></script>
<script src="{{asset('assets/frontend/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/heandline.js"></script>
<script src="{{asset('assets/frontend/')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/magnific-popup.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/wow.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/countdown.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/odometer.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/viewport.jquery.js"></script>
<script src="{{asset('assets/frontend/')}}/js/nice-select.js"></script>
<script src="{{asset('assets/frontend/')}}/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 May 2021 16:30:03 GMT -->
</html>
