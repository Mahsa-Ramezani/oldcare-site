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
                        <h2>خدمات ما</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">خانه</a>
						<i>/</i>
                        <a href="causes.html">خدمات</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>ما چه کار می کنیم؟</p>
                    <h2>ما بر این باوریم که با شما می توانیم زندگی های بیشتری را نجات دهیم</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>غذای سالم</h3>
                                <p>تامین غذای مغذی برای جمعیت جهانی که به سرعت در حال رشد است، چالشی برای سیستم های غذایی امروزی است.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>آب خالص</h3>
                                <p>خدمات بهداشتی و آب را بهبود می بخشد .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>مراقبت های بهداشتی</h3>
                                <p>اقدامات بهداشتی خوب را ترویج می کند.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>آموزش ابتدایی</h3>
                                <p>آموزش برای سالمندانی که در کودکی فرصت درس خواندن نداشتند.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>تسهیلات اقامتی</h3>
                                <p>خانه ای دوم برای زندگی فرد فراهم اورده شده.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>مراقبت اجتماعی</h3>
                                <p>مراقبت و نگهداری از کسانی که در محیط های اجتماعی امکان حضور بدون همراه را ندارند.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>رخدادهای محبوب</p>
                    <h2>بیایید در مورد اهداف کمک در سراسر جهان بدانیم</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-1.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>جمع شده:</strong> $100000</p>
                                <p><strong>هدف:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>خانم و آقای سنتزبرگ</h3>
                            <p>نیازمند کمک مالی به دلیل بازنشستگی و کمبود بودجه برای درمان بیماری ام اس</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="donate.html">اهدا کنید</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-2.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>جمع شده:</strong> $100000</p>
                                <p><strong>هدف:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>آقای پیتر مارک</h3>
                            <p>در حال از دست دادن مزرعه ای که در آن زندگی میکند به علت نداشتن توانایی کار کردن.</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="donate.html">اهدا کنید</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-3.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>جمع شده:</strong> $100000</p>
                                <p><strong>هدف:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>خانم فاضله</h3>
                            <p>یک خانم بی خانمان واقع در افغانستان به علت شرایط بد زندگی اقامت رایگان نیازمند است.</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="donate.html">اهدا کنید</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-4.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>جمع شده:</strong> $100000</p>
                                <p><strong>هدف:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>خانم لیانا جرالد</h3>
                            <p>به تازگی به بیماری سرطان خود پی برده و شرایط مالی خوبی برای شیمی درمانی ندارد.</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="donate.html">اهدا کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->


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
