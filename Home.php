<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SB HOTEL - Home</title>
    <?php require ('inc/links.php')?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body class="bg-light">
<?php require('inc/header.php')?>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center ">WELCOM TO SB-HOTEL</h2>
</div>
<!-- Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/2.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/3.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/4.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/5.png" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/6.png" class="w-100 d-block">
            </div>
        </div>
    </div>
</div>

<!-- Check Availability -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <div class="row mb-1
            custom-ml">
            <h5>Check Availability</h5>
            </div>
            <form>
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mb-3 mt-2 ">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
    <div class="row">
        <dic class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow pop" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/Deluxe.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Deluxe Room</h5>
                    <h6 class="mb-4">$100 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            bedrooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            kitchen
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Air conditioner
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Room heater
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Geyser
                        </span>
                    </div>
                    <div class="Guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            3 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            2 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </dic>
        <dic class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow pop" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/Luxury.png" class="card-img-top">
                <div class="card-body">
                    <h5>Luxury Room</h5>
                    <h6 class="mb-4">$200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            bedrooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            kitchen
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Air conditioner
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Room heater
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Wifi
                        </span>
                    </div>
                    <div class="Guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            8 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            6 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </dic>
        <dic class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow pop" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/Supreme-deluxe.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Supreme-deluxe Room</h5>
                    <h6 class="mb-4">$400 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            bedrooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            kitchen
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Air conditioner
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Room heater
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Wify
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Geyser
                        </span>
                    </div>
                    <div class="Guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            9 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            10 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </dic>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
</div>

<!-- Facilities -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
            <img src="images/features/TV.svg" width="80px">
            <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
            <img src="images/features/AC.svg" width="80px">
            <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
            <img src="images/features/RH.svg" width="80px">
            <h5 class="mt-3">Room Heater</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
            <img src="images/features/fire_alarm.svg" width="80px">
            <h5 class="mt-3">Geyser</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        </div>
    </div>
</div>

<!-- Testimonials-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-item-center mb-3">
                    <img src="images/about/Sabbos.jpg" class="circular-img" width="30px" >
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Customers should be able to follow customer service.
                    No one will accept God, incidentally released,
                    but all the time of proper eating.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-item-center mb-3">
                    <img src="images/about/Dom.jpg" class="circular-img" width="30px" >
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Customers should be able to follow customer service.
                    No one will accept God, incidentally released,
                    but all the time of proper eating.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-item-center mb-3">
                    <img src="images/about/Vid.jpg" class="circular-img" width="30px" >
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Customers should be able to follow customer service.
                    No one will accept God, incidentally released,
                    but all the time of proper eating.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-item-center mb-3">
                    <img src="images/about/Vichet.jpg" class="circular-img" width="30px" >
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Customers should be able to follow customer service.
                    No one will accept God, incidentally released,
                    but all the time of proper eating.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
</div>

<!-- Reach Us -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <di class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15630.329418159137!2d104.90296108241502!3d11.65308078383861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516bdea989b3%3A0x372d2c5e0e14b706!2sCambodia%20Academy%20of%20Digital%20Technology!5e0!3m2!1sen!2skh!4v1677395219589!5m2!1sen!2skh"  loading="lazy" ></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
               <h5>Call us</h5>
                <a href="tel: +85593505639" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill me-1"></i>+855 93 505 639
                </a><br>
                <a href="tel: +855979073202" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill me-1"></i>+855 979 073 202
                </a><br>
                <a href="tel: +85577972708" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill me-1"></i>+855 77 972 708
                </a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow us</h5>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>Facebook
                    </span>
                </a><br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i>Twitter
                    </span>
                </a><br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i>Instagram
                    </span>
                </a><br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-youtube me-1"></i>Youtube
                    </span>
                </a>
            </div>
        </div>
    </di>
</div>
<?php require ('inc/footer.php')?>
<?php require ('inc/Script.php')?>
</body>
</html>