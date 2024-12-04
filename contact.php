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
                        <h2>تماس با ما</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">خانه</a>
						<i>/</i>
                        <a href="contact.html">تماس با ما</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
                <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>با ما در تماس باشید </p>
                    <h2>برای هر سوالی تماس بگیرید</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form method="POST" action="php/contactphp.php">
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="نام و نام خانوادگی" required="required" data-validation-required-message="Please enter your name" dir="rtl" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل" required="required" data-validation-required-message="Please enter your email" dir="rtl" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="موضوع" required="required" data-validation-required-message="Please enter a subject" dir="rtl" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" id="message" placeholder="پیام" required="required" data-validation-required-message="Please enter your message" dir="rtl"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">ارسال پیام</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


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
