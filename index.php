<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="padding-bottom: 0px; height: auto; min-height: auto;">

<head>
    <meta charset="utf-8">
    <title>SHINE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/produc.css" rel="stylesheet">
    <link href="css/shoppings.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body >

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include_once 'home/navbar.php'; ?>
    <!-- Navbar End -->
    
<!--bella end -->
    <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                    <video class="swa-teaser-carousel__video swa-lazyload" tabindex="-1" playsinline="" muted="" autoplay="" loop="" width="100%">
                    <source src="img/bella.mp4.webm" type="">
                    </video>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="">Hello Bella</h1>
                                <h3 class="swa-teaser-carousel__content__description swa-subheadline-sans">Experience Versatile Elegance - Where Style Shines from Every Angle</h3>
                                <a href="prods.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative w-100 h-100 ">
            <img src="img/background.avif" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="">Unlock the Elegance Within</h1>
                                <h3 class="swa-teaser-carousel__content__description swa-subheadline-sans">Discover the Beauty of ShineInHere</h3>
                                <a href="prods.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- bella -->


<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">The Wonder of Color</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/yellow.jpg" alt="">
              
                    </div>
                </div> 
                  <div><h5>Make it Bright</h5>
                    <p>Banish dull days in stacks of yellow jewels and positive vibes.
                         With crystal-powered color, you can be your own sunshine. 
                        Radiant, alive, and ready for anything.</p>
                </div>
                <div>

                    <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Shop yellow</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/green.jpg" alt="">
              
                    </div>
                </div> 
                  <div><h5>Hit Refresh</h5>
                    <p>Choose shades of green to glow and grow like new leaves on a tree.
                         Fresh, vibrant, and focused,
                         it's the color of renewal that reflects your strength within.</p>
                </div>
                <div>

                    <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Shop green</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/pink.jpg" alt="">
              
                    </div>
                </div> 
                  <div><h5>New Mood</h5>
                    <p>If it's high time for a smile then layer on the pink. 
                        Soft and subtle or loud and proud, it's a hue to make you feel good.
                         Welcome to your crystal-covered shortcut to happy.</p>
                </div>
                <div>

                    <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Shop pink</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->
<!-- sunglasses-->
<!-- <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
            <img src="img/sunglasses.jpg" >
            
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                <div class="container">
                    <div class="">
                        <div class="">
                            <h1  class="p"> Originals Frames </h1>
                            <h3 class="p"> A multi-talented wonder showcases style in every facet</h3>
                            <a href=" " class="btn btn-light py-md-3 px-md-5 animated slideInLeft"  > Discover more</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- sunglasses -->
<!-- second page-->

<!-- <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
            <img src="img/secondpage.jpg" >
            
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h1  class=""> Color Pop </h1>
                            <h3 class="swa-teaser-carousel__content__description swa-subheadline-sans">A multi-talented wonder showcases style in every facet</h3>
                            <a href=" " class="btn btn-light py-md-3 px-md-5 animated slideInRight">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- second page -->

    <!-- Service Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <h1><center>The Wonder of Color</center></h1>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center ">

                            <img class="img-fluid" src="img/yellow.jpg" alt="">
                    </div>
                    <div>
                        <h2>Make it Bright</h2>
                        <p>
                            Banish dull days in stacks of yellow jewels and positive vibes. With crystal-powered color, you can be your own sunshine. Radiant, alive, and ready for anything.  
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center ">

                            <img class="img-fluid" src="img/green.jpg" alt="">
                    </div>
                    <div>
                        <h2>Make it Bright</h2>
                        <p>
                            Banish dull days in stacks of yellow jewels and positive vibes. With crystal-powered color, you can be your own sunshine. Radiant, alive, and ready for anything.  
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center ">

                            <img class="img-fluid" src="img/pink.jpg" alt="">
                    </div>
                    <div>
                        <h2>Make it Bright</h2>
                        <p>
                            Banish dull days in stacks of yellow jewels and positive vibes. With crystal-powered color, you can be your own sunshine. Radiant, alive, and ready for anything.  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/pink2.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="container-xxl py-5 category">
                        <div class="container">
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                    <a class="position-relative d-block overflow-hidden" href="oneproduct.html">
                                    <img class="img-fluid" src="img/brace0.jpg" alt="">
                                    </a>
                                </div>
                            <div>
                                <p><center>Millenia necklace</center></p>
                                <p><center>Trilliant cut, Multicolored, Gold-tone plated </center></p> 
                                <p><center>$700.00</center></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Categories Start -->
    <!-- <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
   
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="section-title mb-5 px-3">Best Seller</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/yellow.jpg" alt="">
                  
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/green.jpg" alt="">
                  
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/pink.jpg" alt="">
                  
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
<!-- promo -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="section-title mb-5 px-3">Special offer</h1>
            </div>
            <div class="row g-4 justify-content-center">
                
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/yellow.jpg" alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/pink.jpg" alt="">
                  
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/green.jpg" alt="">
                  
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/pink.jpg" alt="">
                  
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <p class="mb-4">Web Design & Development Course for Beginners</p>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Promo End -->
    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="section-title mb-5 px-3"> Our Clients !</h1>
                </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/green.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/green.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/green.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/green.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> 
        

    <!-- Footer Start -->
        <?php include_once 'home/footer.html'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btns btn-lg btn-primary rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/nav.js"></script>

    <!-- Search bar start-->
    <script>
    document.getElementById("searchButton").addEventListener("click", function() {
        document.getElementById("searchBox").classList.remove("d-none");
        document.getElementById("searchButton").classList.add("d-none");
    });

    document.getElementById("closeSearchButton").addEventListener("click", function() {
        document.getElementById("searchBox").classList.add("d-none");
        document.getElementById("searchButton").classList.remove("d-none");
    });
    </script>
    <!-- Search bar end-->
</body>

</html>