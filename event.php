<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>OldCare</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!--
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
-->

        <!-- Favicon -->
        <link href="img/icon.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
		<?php
			include("header.html");
		?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>آخرین رویدادها</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">خانه</a>
						<i>/</i>
                        <a href="event.html">رویدادها</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>رویدادهای آینده</p>
                    <h2>برای رویدادهای آینده ما آماده باشید</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/event-1.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Isfahan</p>
                                </div>
                                <div class="event-text">
                                    <h3>خرید تخت خواب</h3>
                                    <p>
                                        حدود 900 تخت خواب برای مرکز نیاز است که بعضی از انها برای بخش بهداری و بعضی برای اتاق ها است و پروژه بعدی ما خرید تخت خواب است.
                                    </p>
                                    <a class="btn btn-custom" href="volunteer.php">به ما ملحق شوید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/event-2.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Isfahan</p>
                                </div>
                                <div class="event-text">
                                    <h3>برگزاری جشن</h3>
                                    <p>
                                         ما به بودجه ای برای برگزاری جشن های مختلف مانند جشن های تولد سالمندان و جشن سال نو و ... نیاز داریم.
                                    </p>
                                    <a class="btn btn-custom" href="volunteer.php">به ما ملحق شوید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->


        <?php
			include("footer.html");
		?>

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
