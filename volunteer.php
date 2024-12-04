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
                        <h2>داوطلبان</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">خانه</a>
						<i>/</i>
                        <a href="volunteer.html">داوطلب شوید</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form method="POST" action="php/valunteerphp.php">
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی" required="required" dir="rtl"/>
                                </div>
                                <div class="control-group">
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل" required="required" dir="rtl" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="result" placeholder="چرا می خواهید داوطلب شوید؟" required="required" dir="rtl"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">داوطلب شوید</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>داوطلب شوید</p>
                                <h2>بیایید در زندگی دیگران تغییر ایجاد کنیم</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    گاهی خدا می خواهد با دست تو دست دیگر بندگانش را بگیرد
وقتی دستی را به یاری می گیری،
بدان که دست دیگرت در دست خداست…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


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
