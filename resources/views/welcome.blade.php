@extends('layouts.app')

@section('content')

    <div>
        <div id="home">
            <div class="landing">
                <div class="home-wrap">
                    <div class="home-inner">

                    </div>
                </div>
            </div>

            <div class="caption text-center">
                <h1>Welcome on car-rental</h1>
                <h3>With us You can rent your dream car</h3>
                <a class="btn btn-outline-light btn-lg" href="{{Route("about")}}">READ ABOUT</a>
            </div>
        </div>

        <div id="home-about" class="offset">
            <div class="jumbotron first-jumbotron">
                <div class="narrow">
                    <div class="col-12 text-center about-title">
                        <h1 class="about-heading text-uppercase">about us</h1>
                        <div class="about-heading-underline"></div>
                    </div>
                    <div class="row text-center about-row">
                        <div class="col-md-4" data-aos-duration="800" data-aos="fade-up">
                            <div class="about-item aos-init aos-animate">
                                <i class="fas fa-car about-icon"></i>
                                <h3 class="text-uppercase">OUR CARS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate modi sed
                                    vero!</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos-duration="1200" data-aos="fade-up">
                            <div class="about-item aos-init aos-animate">
                                <i class="fas fa-user-friends about-icon"></i>
                                <h3 class="text-uppercase">OUR WORKERS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eum itaque
                                    suscipit!</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos-duration="1600" data-aos="fade-up">
                            <div class="about-item aos-init aos-animate">
                                <i class="fas fa-coins about-icon"></i>
                                <h3 class="text-uppercase">WARRANTY</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga illo maiores
                                    tenetur?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="home-our-cars" class="offset">
            <div class="jumbotron second-jumbotron">
                <div class="col-12 text-center about-title">
                    <h1 class="about-heading text-uppercase">OUR CARS</h1>
                    <div class="about-heading-underline"></div>
                </div>
                <!--Carousel Wrapper-->
                <div id="carousel-cars" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-cars" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-cars" data-slide-to="1"></li>
                        <li data-target="#carousel-cars" data-slide-to="2"></li>
                        <li data-target="#carousel-cars" data-slide-to="3"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">

                            <div class="col-10 car-carousel-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-12 car-carousel-img-container">
                                        <img class="car-carousel-img" src="../images/car-carousel-1.jpg"
                                             alt="car-carousel-1">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="row">
                                            <div class="col-12 car-carousel-percent-container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Comfort:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:50%; " data-aos-duration="800"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Speed:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:60%; " data-aos-duration="1200"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Noise:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:40%; " data-aos-duration="1600"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="car-carousel-info">
                                                    <div class="car-carousel-text">
                                                        <h1>American Muscle</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Accusantium, aspernatur autem consequuntur error fugiat
                                                            fugit labore laborum minus neque, nostrum porro qui rem
                                                            rerum totam velit vero voluptate? Beatae est illo, ipsum
                                                            itaque necessitatibus rem repudiandae. Cupiditate laudantium
                                                            nulla quos.</p>
                                                    </div>
                                                    <div class="car-carousel-price-btn">
                                                        <p><b>Price per day: 60-100$</b></p>
                                                        <a class="btn btn btn-outline-danger btn-lg"
                                                           href="{{Route("our-cars")}}">READ MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="col-10 car-carousel-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-12 car-carousel-img-container">
                                        <img class="car-carousel-img" src="../images/car-carousel-4.jpg"
                                             alt="car-carousel-1">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="row">
                                            <div class="col-12 car-carousel-percent-container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Comfort:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:80%; " data-aos-duration="800"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Speed:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:30%; " data-aos-duration="1200"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Noise:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:20%; " data-aos-duration="1600"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="car-carousel-info">
                                                    <div class="car-carousel-text">
                                                        <h1>City Cars</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Accusantium, aspernatur autem consequuntur error fugiat
                                                            fugit labore laborum minus neque, nostrum porro qui rem
                                                            rerum totam velit vero voluptate? Beatae est illo, ipsum
                                                            itaque necessitatibus rem repudiandae. Cupiditate laudantium
                                                            nulla quos.</p>
                                                    </div>
                                                    <div class="car-carousel-price-btn">
                                                        <p><b>Price per day: 20-40$</b></p>
                                                        <a class="btn btn btn-outline-danger btn-lg"
                                                           href="{{Route("our-cars")}}">READ MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 car-carousel-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-12 car-carousel-img-container">
                                        <img class="car-carousel-img" src="../images/car-carousel-2.jpg"
                                             alt="car-carousel-1">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="row">
                                            <div class="col-12 car-carousel-percent-container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Comfort:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:20%; " data-aos-duration="300"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Speed:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:90%; " data-aos-duration="500"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Noise:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:75%; " data-aos-duration="700"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="car-carousel-info">
                                                    <div class="car-carousel-text">
                                                        <h1>Speed Breakers</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Accusantium, aspernatur autem consequuntur error fugiat
                                                            fugit labore laborum minus neque, nostrum porro qui rem
                                                            rerum totam velit vero voluptate? Beatae est illo, ipsum
                                                            itaque necessitatibus rem repudiandae. Cupiditate laudantium
                                                            nulla quos.</p>
                                                    </div>
                                                    <div class="car-carousel-price-btn">
                                                        <p><b>Price per day: 120-250$</b></p>
                                                        <a class="btn btn btn-outline-danger btn-lg"
                                                           href="{{Route("our-cars")}}">READ MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 car-carousel-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-12 car-carousel-img-container">
                                        <img class="car-carousel-img" src="../images/car-carousel-3.jpg"
                                             alt="car-carousel-1">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="row">
                                            <div class="col-12 car-carousel-percent-container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Comfort:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:70%; " data-aos-duration="800"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Speed:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:60%; " data-aos-duration="1200"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                    <div class="col-lg-4 col-12 car-carousel-percent-box">
                                                        <p class="car-carousel-percent-text">Noise:</p>
                                                        <span class="car-carousel-line">
                                                                <i style="width:50%; " data-aos-duration="1600"
                                                                   data-aos="fade-right"
                                                                   class="aos-init aos-animate"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="car-carousel-info">
                                                    <div class="car-carousel-text">
                                                        <h1>Roadster</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Accusantium, aspernatur autem consequuntur error fugiat
                                                            fugit labore laborum minus neque, nostrum porro qui rem
                                                            rerum totam velit vero voluptate? Beatae est illo, ipsum
                                                            itaque necessitatibus rem repudiandae. Cupiditate laudantium
                                                            nulla quos.</p>
                                                    </div>
                                                    <div class="car-carousel-price-btn">
                                                        <p><b>Price per day: 40-60$</b></p>
                                                        <a class="btn btn btn-outline-danger btn-lg"
                                                           href="{{Route("our-cars")}}">READ MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-cars" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-cars" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </div>
        <div id="home-partners" class="offset">
            <div class="jumbotron first-jumbotron">
                <div class="col-12 text-center partners-title">
                    <h1 class="partners-heading text-uppercase">OUR PARTNERS</h1>
                    <div class="partners-heading-underline"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="testimonial-slider" class="owl-carousel testimonial-owl-carousel">
                                <div class="testimonial-item">
                                    <p class="description">
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam
                                        autem delectus dicta laudantium maiores odit quam saepe. Consequatur
                                        molestiae nihil quam? Consequuntur eaque libero minima quam sequi? Alias,
                                        vel.
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                    </p>
                                    <div class="testimonial-content">
                                        <div class="image"><img src="../images/partner-1.jpg" alt="Patryk Babel">
                                        </div>
                                        <h3 class="name">Patryk Babel</h3>
                                        <span class="position">Rent-Car Warsaw Owner</span>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p class="description">
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam
                                        autem delectus dicta laudantium maiores odit quam saepe. Consequatur
                                        molestiae nihil quam? Consequuntur eaque libero minima quam sequi? Alias,
                                        vel.
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                    </p>
                                    <div class="testimonial-content">
                                        <div class="image"><img src="../images/partner-2.jpg"
                                                                alt="Krzysztof Gramik"></div>
                                        <h3 class="name">Krzysztof Gramik</h3>
                                        <span class="position">Car-Wash Warsaw Owner</span>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p class="description">
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam
                                        autem delectus dicta laudantium maiores odit quam saepe. Consequatur
                                        molestiae nihil quam? Consequuntur eaque libero minima quam sequi? Alias,
                                        vel.
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                    </p>
                                    <div class="testimonial-content">
                                        <div class="image"><img src="../images/partner-3.jpg"
                                                                alt="Patrycja Ciechoń"></div>
                                        <h3 class="name">Patrycja Ciechoń</h3>
                                        <span class="position">BMW Warsaw Dealer</span>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p class="description">
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam
                                        autem delectus dicta laudantium maiores odit quam saepe. Consequatur
                                        molestiae nihil quam? Consequuntur eaque libero minima quam sequi? Alias,
                                        vel.
                                        <i class="text-icon fas fa-quote-left" style="color:crimson"></i>
                                    </p>
                                    <div class="testimonial-content">
                                        <div class="image"><img src="../images/partner-4.jpg"
                                                                alt="Bogumił Jasnowski"></div>
                                        <h3 class="name">Bogumił Jasnowski</h3>
                                        <span class="position">Car-Design Warsaw Owner</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="home-contact" class="offset">
            <div class="jumbotron second-jumbotron">
                <div class="col-12 text-center about-title">
                    <h1 class="about-heading text-uppercase">CONTACT US</h1>
                    <div class="about-heading-underline"></div>
                </div>
                <div class="container contact">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <form action="" class="">
                                        <i class="fas fa-user-alt"></i>
                                        <label for="name" class="contact-form-label">Your name:</label>
                                        <input type="text" id="name" class="form-control contact-form-input">

                                        <i class="fas fa-envelope-open-text"></i>
                                        <label for="email" class="contact-form-label">Contact e-mail:</label>
                                        <input type="email" id="email" class="form-control contact-form-input">

                                        <i class="fas fa-heading"></i>
                                        <label for="msg-title" class="contact-form-label">Message title:</label>
                                        <input type="text" id="msg-title" class="form-control contact-form-input">

                                        <i class="fas fa-quote-right"></i>
                                        <label for="message" class="contact-form-label">Message text:</label>
                                        <textarea id="message" cols="30" rows="5"
                                                  class="form-control contact-form-input"></textarea>
                                        <p class="contact-text-accept text-muted text-justify">
                                            <input type="checkbox" id="accept" name="accept" class="">
                                            <label id="accept_label" for="accept">
                                                Car-Rent needs the contact information you provide to us to contact you
                                                about our products and services. You may unsubscribe from these
                                                communications at anytime. For information on how to unsubscribe, as
                                                well as our privacy practices and commitment to protecting your privacy,
                                                check out our Privacy Policy
                                            </label>
                                        </p>
                                        <button class="btn btn btn-outline-danger contact-form-btn text-center"
                                                type="button">
                                            Send message
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-8 col-12 map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d312779.9431310756!2d20.781016711291045!3d52.232606289062204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sWarszawa!5e0!3m2!1spl!2spl!4v1594643902640!5m2!1spl!2spl"
                                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                        tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

