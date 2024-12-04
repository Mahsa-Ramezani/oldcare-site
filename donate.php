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
                        <h2>اکنون کمک کنید</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">خانه</a>
						<i>/</i>
                        <a href="donate.html">کمک نقدی</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Donate Start -->
        <div class="donate" data-parallax="scroll" data-image-src="img/donate.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>اکنون کمک کنید</p>
                                <h2>برای زندگی بهتر به نیازمندان کمک کنیم</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    همه ما می دانیم که والدین، همسر و سایر اعضای خانواده ما در نهایت پیر می شوند و با چالش های بهداشتی اجتناب ناپذیری روبرو می شوند.
ما حتی می‌دانیم که بیماری و مرگ بخشی از زندگی در دنیای سقوط کرده است. اما ما هرگز کاملاً آماده نیستیم که این واقعیت‌ها به عزیزانمان ضربه بزنند - مخصوصاً وقتی یک بیماری ناتوان کننده به تدریج زندگی فعالی را از آنها سلب کرده یا خاطرات آنها را از بین ببرد.
چه با والدین یا همسر، می‌توانید با درک برخی از آنچه که این فصل به ارمغان می‌آورد، گام‌هایی برای فعال شدن بردارید.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form method="POST" action="php/donatephp.php">
                                <div class="control-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="نام و نام خانوادگی" required="required" dir="rtl" />
                                </div>
                                <div class="control-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="ایمیل" required="required" dir="rtl" />
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" value="10$" id="price10" name="options" checked> $10
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" value="20$" id="price20" name="options"> $20
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" value="30$" id="price30" name="options"> $30
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">اهدا کنید</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->


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
