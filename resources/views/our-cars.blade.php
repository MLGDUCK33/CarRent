@extends('layouts.app')

@section('content')
    <div class="our-cars-pg-header">
        <div class="our-cars-pg-container">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-8 our-cars-header-text">
                        <h1>OUR CARS</h1>
                        <h3>Choose your dream car</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron second-jumbotron">
        <div class="col-12 text-center partners-title">
            <h1 class="partners-heading text-uppercase">Featured CARS</h1>
            <div class="partners-heading-underline"></div>
        </div>
        <div class="container">
            <div class="row">
                <div id="featured-slider" class="owl-carousel featured-owl-carousel">
                    <div class="featured-item" data-aos-duration="800" data-aos="fade-up">
                        <div class="product-container">
                            <div class="product-card">
                                <div class="product-box-img">
                                    <img
                                        src="https://purepng.com/public/uploads/medium/purepng.com-white-jaguar-xf-2-carcarvehicletransportjaguar-961524650637egafd.png"
                                        alt="">
                                </div>
                                <div class="product-box-content text-center">
                                    <h1>JAGUAR CX-200</h1>
                                    <h3>Sport Car</h3>
                                    <p>Price: 100$ / DAY</p>
                                    <a href="#" class="btn product-order-button text-bold">ORDER NOW</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-item" data-aos-duration="1200" data-aos="fade-up">
                        <div class="product-container">
                            <div class="product-card">
                                <div class="product-box-img">
                                    <img
                                        src="https://purepng.com/public/uploads/medium/purepng.com-white-jaguar-xf-2-carcarvehicletransportjaguar-961524650637egafd.png"
                                        alt="">
                                </div>
                                <div class="product-box-content text-center">
                                    <h1>JAGUAR CX-200</h1>
                                    <h3>Sport Car</h3>
                                    <p>Price: 100$ / DAY</p>
                                    <a href="#" class="btn product-order-button text-bold">ORDER NOW</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-item" data-aos-duration="1600" data-aos="fade-up">
                        <div class="product-container">
                            <div class="product-card">
                                <div class="product-box-img">
                                    <img
                                        src="https://purepng.com/public/uploads/medium/purepng.com-white-jaguar-xf-2-carcarvehicletransportjaguar-961524650637egafd.png"
                                        alt="">
                                </div>
                                <div class="product-box-content text-center">
                                    <h1>JAGUAR CX-200</h1>
                                    <h3>Sport Car</h3>
                                    <p>Price: 100$ / DAY</p>
                                    <a href="#" class="btn product-order-button text-bold">ORDER NOW</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron first-jumbotron">
        <div class="col-12 text-center partners-title">
            <h1 class="partners-heading text-uppercase">Other Cars</h1>
            <div class="partners-heading-underline"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card all-cars-card">
                        <div class="all-cars-img-container">
                            <img class="card-img-top" src="../images/highlighted-car-3.png" alt="Card image cap">
                        </div>
                        <div class="card-body all-cars-body text-center">
                            <h4 class="card-title text-uppercase">audi a6</h4>
                            <h5 class="card-subtitle text-muted">Sedan</h5>
                            <p class="card-text">Price: 80$ / DAY</p>
                            <a href="#" class="btn btn-outline-danger text-uppercase">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card all-cars-card">
                        <div class="all-cars-img-container">
                            <img class="card-img-top" src="../images/highlighted-car-1.png" alt="Card image cap">
                        </div>
                        <div class="card-body all-cars-body text-center">
                            <h4 class="card-title text-uppercase">bmw m3</h4>
                            <h5 class="card-subtitle text-muted">Sport Car</h5>
                            <p class="card-text">Price: 80$ / DAY</p>
                            <a href="#" class="btn btn-outline-danger text-uppercase">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card all-cars-card">
                        <div class="all-cars-img-container">
                            <img class="card-img-top" src="../images/highlighted-car-3.png" alt="Card image cap">
                        </div>
                        <div class="card-body all-cars-body text-center">
                            <h4 class="card-title text-uppercase">audi a6</h4>
                            <h5 class="card-subtitle text-muted">Sedan</h5>
                            <p class="card-text">Price: 80$ / DAY</p>
                            <a href="#" class="btn btn-outline-danger text-uppercase">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card all-cars-card">
                        <div class="all-cars-img-container">
                            <img class="card-img-top" src="../images/highlighted-car-1.png" alt="Card image cap">
                        </div>
                        <div class="card-body all-cars-body text-center">
                            <h4 class="card-title text-uppercase">bmw m3</h4>
                            <h5 class="card-subtitle text-muted">Sport Car</h5>
                            <p class="card-text">Price: 80$ / DAY</p>
                            <a href="#" class="btn btn-outline-danger text-uppercase">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
