<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>OldCare</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
		
        <!-- menu Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>بیایید با سالمندان مهربان باشیم</h1>
                            <p dir="rtl">امروز اگر بزرگ شدیم به برکت کسانیست که در این آشوب روزگار سپرجوانیمان شدند و رنجهایمان رابه دوش کشیدند
							کسانیکه امروزصورتشان پراز چین و چروک شده	
							...	
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>با دست های یاری رسان مشارکت کنید</h1>
                            <p dir="rtl">
								 نگذاریم امروز پدربزرگ ها و مادربزرگ ها تنهاییشان را با عکس های قدیمی تقسیم کنند ...
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>لبخند برلب میلیونها نفر بیاورید</h1>
                            <p dir="rtl">
								ما با احترام به کهن سالان در حقیقت به فردای خود احترام می گذاریم ...
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--menu End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                         16:9 aspect ratio 
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>آشنایی با ما</p>
                            <h2>سازمان کمک به سالمندان</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">ماموریت ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">چشم انداز</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active" dir="rtl">
								
                                    این مرکز در سال 1394 با الطاف الهی و تکیه بر دانش و نیروی جوان تاسیس گردید. اهداف کلی مرکز سالمندان ارتقاء سطح سلامت سالمندان و بهبود کیفیت این عزیزان است که این اهداف کلی دارای زیر مجموعه های گوناگونی است، این مرکز با فراهم آوری تمام امکانات مورد نیاز برای یک زندگی ایده آل شرایط مناسبی را برای سالمندان و خانواده های عزیز آنها مهیا کرده است و با دیدگاه صرفا نگهداری سنتی در خانه سالمندان به شدت مخالف بوده است و این مرکز راهی دوطرفه به سمت منزل و بیمارستان قرار داده است بطوریکه حد فاصل میان بیمارستان تا منزل بوده است به این ترتیب که بیماران ترخیصی از بیمارستان که دوره ی نقاهت خود را سپری می کنند به جای سکونت در منزل در این مرکز از تمامی امکانات توانبخشی بهره برده و آماده ی بازگشت به کانون خانواده می شوند.
									سلامتی و طول عمر سالمندان عزیز آرزوی قلبی این مجموعه است.
									
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    اهداف کلی مرکز توانبخشی و مراقبتی ارتقاء سطح سلامت سالمندان و بهبود کیفیت آن ها می باشد. این مرکز با فراهم آوری تمام امکانات مورد نیاز برای یک زندگی ایده آل شرایط مناسبی را برای سالمندان و خانواده های عزیز آنها مهیا کرده است. در این مرکز کلیه خدمات پزشکی و مراقبتی ازجمله ویزیت روزانه پزشک و خدمات تخصصی پرستاری ، فیزیوتراپی ، مدد کاری ، روانشناسی و تغذیه و غیره به سالمندان ارائه می شود. خانه سالمندان صبا سعی دارد تا با خدمات متنوع هر آنچه که تمام اقشار سالمند را در یک مجموعه با عنوان مرکز جامع توانبخشی و نگهداری سالمندان نیاز است را فراهم سازد.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
									ما در تلاشیم تا در آینده استخر، سونا و جکوزی، آب درمانی، کتابخانه، آموزش و سرگرمی، سالن اجتماعات، اجرای برنامه های فرهنگی و هنری را در یک شعبه جدید در اختیار شما قرار دهیم و باعث ایجاد نشاط و روحیه در سالمندان شویم.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


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
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                                <p>کشورها</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                                <p>داوطلبان</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>اهداف ما</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                                <p>کمک ها</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
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
                            <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
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
                            <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
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
                            <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
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
                            <a class="btn btn-custom" href="donate.php">اهدا کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->
        
        
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
                                            حدود 900 تخت خواب برای مرکز نیاز است که برای بخش بهداری به کار میرود. 
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


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>با تیم ما آشنا شوید</p>
                    <h2>افراد فروتن پشت فعالیت های خیریه ما</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>سرمایه گذار</p>
                                <div class="team-social">
                                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>مدیر ارتباطات</p>
                                <div class="team-social">
                                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>مدیر تبلیغات</p>
                                <div class="team-social">
                                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>تامین کننده مواد اولیه</p>
                                <div class="team-social">
                                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
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
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>نظرات</p>
                    <h2>آنچه مردم در مورد فعالیت های ما صحبت می کنند</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-1.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Peter Parker</h3>
                                <p>Guest</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                سلام
								خانه سالمندان واقعا کادر حرفه اى و متخصصی دارد از نظر من یکى از بهترین آسایشگاه سالمندان هستش.	
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-2.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Parnaz Sadeghi</h3>
                                <p>Guest</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                خدمات بسیار عالی هست.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-3.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Ali Rad</h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                وقتی فرد در این مرکز کار داوطلبانه انجام میدهد علاوه بر محیط خوب سرشار از احساس خوب میشود.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-4.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Ella Johnson</h3>
                                <p>User</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                سلام من از خدمات این اسایشگاه برای برادرم استفاده کردم واقعا عالی بود واقعا بینظیر و دلسوزانه بود با اینکه برادر من بیماری زخم بستر هم داشتند خدمات این خانه سالمندان واقعا با کیفیت بود.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
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


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>وبلاگ ما</p>
                    <h2>آخرین اخبار به طور مستقیم از وبلاگ ما</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="img/blog-1.jpg">گردش در گلخانه</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="img/blog-2.jpg">پیک نیک در طبیعت</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="img/blog-3.jpg">چک آپ کلی</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


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
