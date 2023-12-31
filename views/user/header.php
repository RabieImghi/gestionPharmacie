<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <title>Tale SEO Agency CSS Template by TemplateMo website</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/user/assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/user/assets/css/templatemo-tale-seo-agency.css">
        <link rel="stylesheet" href="assets/user/assets/css/owl.css">
        <link rel="stylesheet" href="assets/user/assets/css/animate.css">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    </head>
    <body>
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        </div>
        <div class="pre-header">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-9">
                <div class="left-info">
                    <ul>
                    <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i>St. London 54th Bull</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                <div class="social-icons">
                    <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="assets/user/assets/images/logo.svg" alt="" style="max-width: 100px;">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                            <li class="scroll-to-section"><a href="<?=$_ENV['APP_URL']?>/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                            <li class="scroll-to-section"><a href="#infos">Infos</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                            <li class="scroll-to-section"><a href="<?=$_ENV['APP_URL']?>/Medicament">Medicament</a></li>
                            <?php
                            if(isset($_SESSION["user_id"])){
                            ?>
                            <li class="scroll-to-section"><a href="<?=$_ENV['APP_URL']?>/logout">List Bone</a></li>
                            <li class="scroll-to-section"><a href="<?=$_ENV['APP_URL']?>/logout">logOut</a></li>
                            <?php
                            }else{
                            ?>
                            <li class="scroll-to-section"><a href="<?=$_ENV['APP_URL']?>/login">login</a></li>
                            <?php
                            }
                            ?>
                            
                        </ul>   
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header> 
        <div class="mainContent">
            <?=$content?>
        </div>
        <footer>
            <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved. 
                
                <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
            </div>
        </footer>
        <script src="assets/user/vendor/jquery/jquery.min.js"></script>
        <script src="assets/user/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/user/assets/js/isotope.min.js"></script>
        <script src="assets/user/assets/js/owl-carousel.js"></script>
        <script src="assets/user/assets/js/tabs.js"></script>
        <script src="assets/user/assets/js/popup.js"></script>
        <script src="assets/user/assets/js/custom.js"></script>
        
    </body>

</html>