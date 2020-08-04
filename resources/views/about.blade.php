@extends('layouts.app')

@section('content')
    <div class="about-pg-header">
        <div class="about-pg-container">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-8 about-header-text">
                        <h1>ABOUT US</h1>
                        <h3>Get to know us a little closer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron first-jumbotron">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="../images/about-office.jpg" class="jumbotron-first-image" alt="Office">
                </div>
                <div class="col-md-5 px-0 col-12 jumbotron-first-text">
                    <h1>Who we are ?</h1>
                    <h3>Our Story</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquid architecto at atque enim
                        molestias possimus quae quasi sit.</p>
                    <h3>Years of experience</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorem natus neque numquam
                        omnis perspiciatis recusandae rem sunt voluptatum.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron second-jumbotron content__left">
        <div class="col-12">
            <div class="row">
                <div class="col-md-5 col-md-push-7 px-0 offset-md-1 col-12 jumbotron-second-text">
                    <h1>Our team</h1>
                    <h3>Professionals only</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquid architecto at atque enim
                        molestias possimus quae quasi sit.</p>
                    <h3>Years of experience in the automotive industry</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorem natus neque numquam
                        omnis perspiciatis recusandae rem sunt voluptatum.</p>
                </div>
                <div class="col-md-6 col-md-pull-6 col-12 jumbotron-second-img-container">
                    <img src="../images/about-team.jpg" class="jumbotron-second-image" alt="Office">
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron first-jumbotron">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="../images/about-cars.jpg" class="jumbotron-first-image" alt="Office">
                </div>
                <div class="col-md-5 px-0 col-12 jumbotron-first-text">
                    <h1>Our Cars</h1>
                    <h3>Hundreds of models</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquid architecto at atque enim
                        molestias possimus quae quasi sit.</p>
                    <h3>Only proven and safe vehicles</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorem natus neque numquam
                        omnis perspiciatis recusandae rem sunt voluptatum.</p>
                </div>
            </div>
        </div>
    </div>
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
                                        Car-Rent needs the contact information you provide to us to contact you about
                                        our products and services. You may unsubscribe from these communications at
                                        anytime. For information on how to unsubscribe, as well as our privacy practices
                                        and commitment to protecting your privacy, check out our Privacy Policy
                                    </label>
                                </p>
                                <button class="btn btn btn-outline-danger contact-form-btn text-center" type="button">
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
@endsection
