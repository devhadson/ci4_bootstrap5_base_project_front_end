<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--<title>Industro - Industrial HTML Template</title>-->
    <title><?= isset($page_title) ? $page_title.' | ' : "" ?><?= env('short_name') ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('public/assets/img/favicon.png')  ?>" rel="icon">
    <link href="<?= base_url('public/assets/img/apple-touch-icon.png')  ?>" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('public/assets/vendor/aos/aos.css')  ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css')  ?>" rel="stylesheet">
    <link href="<?= base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css')  ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('public/assets/css/style.css')  ?>" rel="stylesheet">

    <!-- =======================================================
    * Template Name : Bootstrap5-DEV-Hadsonpar-v.1.0.0
    * Template URL  : https://hadsonpar.com/template/Bootstrap5-DEV-Hadsonpar-v.1.0.0.index.html
    * Author        : hadsonpar.com
    * License       : https://hadsonpar.com/licencia/
    ======================================================== -->
</head>

<body>

    <!-- Header Start -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= base_url('') ?>" class="logo d-flex align-items-center">
            <img src="<?= base_url('public/assets/img/logo.png')  ?>" alt="">
            <span>DEV Hadsonpar</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto <?= isset($page_title) && $page_title == 'Home' ? 'active' : '' ?>"  href="<?= base_url('') ?>">Home</a></li>
            <li><a class="nav-link scrollto <?= isset($page_title) && $page_title == 'About' ? 'active' : '' ?>" href="<?= base_url('Home/about') ?>">About</a></li>
            <li><a class="nav-link scrollto <?= isset($page_title) && $page_title == 'Services' ? 'active' : '' ?>" href="<?= base_url('Home/services') ?>">Services</a></li>
            <li><a class="nav-link scrollto <?= isset($page_title) && $page_title == 'Projects' ? 'active' : '' ?>" href="<?= base_url('Home/projects') ?>">Projects</a></li>
            <li><a class="nav-link scrollto <?= isset($page_title) && $page_title == 'Contact' ? 'active' : '' ?>" href="<?= base_url('Home/contact') ?>">Contact</a></li>
            <li><a class="getstarted scrollto" href="#">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header>

    <!-- Navbar End -->


    <!-- RenderSection of CI4 Start -->
    <?= $this->renderSection('content') ?>
    <!-- RenderSection of CI4 End -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            </div>
            <div class="col-lg-6">
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>
            </div>
        </div>
        </div>

        <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>DEV Hadsonpar</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links mt-3">
                <a href="https://www.facebook.com/hadsonpar" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://github.com/devhadson" target="_blank" class="instagram"><i class="bi bi-github"></i></a>
                <a href="https://twitter.com/hadson_paredes" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Web Site</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('') ?>">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home/about') ?>">About</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home/services') ?>">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home/projects') ?>">Projects</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('Home/contact') ?>">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">F.A.Q</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                <?= env('business_address') ?> <br><br>
                <strong>Phone:</strong> <?= env('business_telephone') ?><br>
                <strong>Email:</strong> <?= env('business_email') ?><br>
                </p>

            </div>

            </div>
        </div>
        </div>

        <div class="footer-bottom">
        <div class="container">      
            <div class="copyright">
            &copy; Copyright <strong><?= env('short_name') ?></strong>. All Rights Reserved
            </div>

            <div class="credits">
            Designed by <a href="https://hadsonpar.com/" target="_blank"><strong><?= env('distributed_by') ?></strong></a>
            </div>
        </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('public/assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>    

    <!-- Template Main JS File -->
    <script src="<?= base_url('public/assets/js/main.js')  ?>"></script>

    </body>
</html>