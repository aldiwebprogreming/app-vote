<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ebunga</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?= base_url('assets/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/') ?>css/style.css?v=1.0" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>ebunga@gmail.com</h2>
                               
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+123 456 7890</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">ebunga</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="price.html" class="nav-item nav-link">Price</a>
                        <a href="class.html" class="nav-item nav-link">Class</a>
                        <a href="team.html" class="nav-item nav-link">Trainer</a>
                        <a href="portfolio.html" class="nav-item nav-link">Pose</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Birthday cake design contest</h1>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasell nec pretum mi. Curabi ornare velit non. Aliqua metus tortor auctor quis sem.
                            </p>
                            <div class="hero-btn">
                                <a class="btn" href="">Join Now</a>
                                <a class="btn" href="">Vote Cake</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="<?= base_url('assets/')?>img/cake1.png" alt="cake">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="<?= base_url('assets/') ?>img/about.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Welcome to Yooga</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What we do</p>
                    <h2>Yoga For Health</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout"></i>
                            </div>
                            <h3>Heal emotions</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item active">
                            <div class="service-icon">
                                <i class="flaticon-workout-1"></i>
                            </div>
                            <h3>Body Refreshes</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout-2"></i>
                            </div>
                            <h3>Mind & Serenity</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout-3"></i>
                            </div>
                            <h3>Enjoy Your life</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-workout-4"></i>
                            </div>
                            <h3>Body & Spirituality</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-yoga-pose"></i>
                            </div>
                            <h3>Body & Mind</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Class Start -->
        <div class="class">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Our Classes</p>
                    <h2>Yoga Class Shedule</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="class-filter">
                            <li data-filter="*" class="filter-active">All Classes</li>
                            <li data-filter=".filter-1">Pilates Yoga</li>
                            <li data-filter=".filter-2">Hatha Yoga</li>
                            <li data-filter=".filter-3">Vinyasa yoga</li>
                        </ul>
                    </div>
                </div>
                <div class="row class-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="img/class-1.jpg" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="img/teacher-1.png" alt="Image">
                                    <h3>Elise Moran</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Pilates Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="img/class-2.jpg" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="img/teacher-2.png" alt="Image">
                                    <h3>Kate Glover</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Iyengar Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="img/class-3.jpg" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="img/teacher-3.png" alt="Image">
                                    <h3>Elina Ekman</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Ashtanga yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="img/class-4.jpg" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="img/teacher-4.png" alt="Image">
                                    <h3>Lilly Fry</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Hatha Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="img/class-5.jpg" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="img/teacher-5.png" alt="Image">
                                    <h3>Olivia Yates</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Kundalini Yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="1s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="img/class-6.jpg" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="img/teacher-6.png" alt="Image">
                                    <h3>Millie Harper</h3>
                                    <a href="">+</a>
                                </div>
                                <h2>Vinyasa yoga</h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                                    <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Class End -->
        
        
        <!-- Discount Start -->
        <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Awesome Discount</p>
                    <h2>Get <span>30%</span> Discount for all Classes</h2>
                </div>
                <div class="container discount-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. 
                    </p>
                    <a class="btn">Join Now</a>
                </div>
            </div>
        </div>
        <!-- Discount End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Package</p>
                    <h2>Yoga Pricing Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Basic</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>49<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-status">
                                    <span>Popular</span>
                                </div>
                                <div class="price-title">
                                    <h2>Standard</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>99<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Premium</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>149<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>Our Client Say!</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Trainer</p>
                    <h2>Expert Yoga Trainer</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Millie Harper</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Lilly Fry</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Elise Moran</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Kate Glover</h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Yoga Articles</h2>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-4.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-5.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-6.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="index.html" class="footer-logo">ebunga</a>
                        <h3>123 Street, New York, USA</h3>
                        <div class="footer-menu">
                            <p>+012 345 67890</p>
                            <p>info@example.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/easing/easing.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/wow/wow.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?= base_url('assets/') ?>mail/jqBootstrapValidation.min.js"></script>
        <script src="<?= base_url('assets/') ?>mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url('assets/') ?>js/main.js"></script>
    </body>
</html>
