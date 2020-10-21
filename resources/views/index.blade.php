@extends('layout.Mainlayout')
@section('title', 'Home')

@section('body-content')
<!-- banner -->
<div class="bannerbg-w3l">

    @include('layout.headTop')
    <!-- banner text -->
    <div class="banner-text-agile">
        <div class="container">
            <div class="banner-w3lstexts text-white text-center">
                <h1>Our Home</h1>
                <h4 class="text-uppercase mt-md-3 mt-2 mb-md-4 mb-3">for your home</h4>
                <p class="text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation
                    ullamco laboris</p>
                <a href="about.html" class="banner-button btn mt-md-5 mt-4">Know More</a>
            </div>
        </div>
    </div>
    <!-- //banner text -->
</div>

@include('Auth.login')
@include('Auth.register')
<!-- //banner -->

<!-- banner-bottom -->
<div class="serach-w3agile py-5">
    <div class="container py-xl-4 py-lg-3">
        <h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold text-center">Find Your Home</h3>
        <div class="place-grids">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-sm-3 col-6 place-grid">
                        <h5>Select City</h5>
                        <select class="sel" required="">
                            <option value="">City 1</option>
                            <option value="">City 2</option>
                            <option value="">City 3</option>
                            <option value="">City 4</option>
                            <option value="">City 5</option>
                            <option value="">City 6</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-6 place-grid">
                        <h5>Property type</h5>
                        <select class="sel" required="">
                            <option value="">Select</option>
                            <option value="">Apartment</option>
                            <option value="">Independent house</option>
                            <option value="">Villa</option>
                            <option value="">Pent House</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-6 place-grid mt-sm-0 mt-3">
                        <h5>Type</h5>
                        <select class="sel" required="">
                            <option value="">BHK</option>
                            <option value="">1BHK</option>
                            <option value="">2BHK</option>
                            <option value="">3BHK</option>
                            <option value="">4BHK</option>
                            <option value="">5BHK</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-6 place-grid">
                        <input type="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //banner-bottom -->

<!-- middle section -->
<div class="middle-w3l">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-4 button">

            </div>
            <div class="col-lg-6 col-md-8 left-build-wthree py-5 px-sm-5 px-4">
                <div class="py-xl-5 py-lg-3 px-xl-4">
                    <h4>A Beautiful Beach House</h4>
                    <h6 class="mt-3 mb-xl-5 mb-4">Excepteur sint occaecat</h6>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <ul class="list-beach mt-lg-5 mt-4">
                        <li>
                            <div class="row">
                                <div class="col-1 text-center">
                                    <i class="fas fa-hand-point-right"></i>
                                </div>
                                <div class="col-10">
                                    <p>Totam rem aperiamet quasi architecto beatae vitae dicta sunt explicabo beatae
                                        vitae dicta.</p>
                                </div>
                            </div>
                        </li>
                        <li class="my-3">
                            <div class="row">
                                <div class="col-1 text-center">
                                    <i class="fas fa-hand-point-right"></i>
                                </div>
                                <div class="col-10">
                                    <p>A rchitecto beatae Totam rem aperiamet quasi architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-1 text-center">
                                    <i class="fas fa-hand-point-right"></i>
                                </div>
                                <div class="col-10">
                                    <p>Dicta sunt explicabo Totam rem aperiamet quasi architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //middle section -->

<!-- services -->
<div class="what-w3ls py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-md-5 mb-4">
            <h3 class="tittle mb-sm-2">Our Services</h3>
            <p>Some words about our property services</p>
        </div>
        <div class="what-grids">
            <div class="row">
                <div class="col-md-6 what-grid1">
                    <div class="row what-top">
                        <div class="col-2 what-left">
                            <i class="fas fa-key"></i>
                        </div>
                        <div class="col-10 what-right">
                            <h4>Renting Service</h4>
                            <p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos ea est, laboriosam
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row what-top my-md-5 my-4">
                        <div class="col-2 what-left">
                            <i class="far fa-money-bill-alt"></i>
                        </div>
                        <div class="col-10 what-right">
                            <h4>Saling Service</h4>
                            <p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos ea est, laboriosam
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row what-top">
                        <div class="col-2 what-left">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <div class="col-10 what-right">
                            <h4>Non Stop Security</h4>
                            <p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos ea est, laboriosam
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 what-grid1 my-md-0 my-4">
                    <div class="row what-top">
                        <div class="col-2 what-left">
                            <i class="far fa-building"></i>
                        </div>
                        <div class="col-10 what-right">
                            <h4>Property Management</h4>
                            <p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos ea est, laboriosam
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row what-top my-md-5 my-4">
                        <div class="col-2 what-left">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="col-10 what-right">
                            <h4>Property Listing</h4>
                            <p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos ea est, laboriosam
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row what-top">
                        <div class="col-2 what-left">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="col-10 what-right">
                            <h4>Luxurious Fittings</h4>
                            <p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos ea est, laboriosam
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- pricing -->
<section class="pricing py-5" id="pricings">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="tittle mb-2 text-white">Our Pricings</h3>
            <p class="test-title-paara">A few word about our Planes</p>
        </div>
        <div class="inner-sec">
            <div class="card-deck text-center row mt-5">
                <div class="price-info-grid col-lg-4">
                    <div class="price-inner">
                        <div class="price-header">
                            <h4>Starter</h4>
                        </div>
                        <div class="price-body">
                            <h5 class="pricing-title">
                                <span class="dolor">$</span> 789.00
                                <label>Per Month</label>

                            </h5>

                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2 border-bottom">Creative Marketing</li>
                                <li class="py-2">-</li>
                            </ul>
                            <a href="#" class="btn btn-block py-2" data-toggle="modal"
                                data-target="#exampleModalCenter2">
                                <i class="far fa-user"></i> Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="price-info-grid col-lg-4 my-lg-0 my-3">
                    <div class="price-inner">
                        <div class="price-header">
                            <h4>Professional</h4>
                        </div>
                        <div class="price-body">
                            <h5 class="pricing-title">
                                <span class="dolor">$</span>1089.00
                                <label>Per Month</label>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2 border-bottom">Creative Marketing</li>
                                <li class="py-2">-</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-outline-primary py-2" data-toggle="modal"
                                data-target="#exampleModalCenter2">
                                <i class="far fa-user"></i> Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="price-info-grid col-lg-4">
                    <div class="price-inner">
                        <div class="price-header">
                            <h4>Enterprise</h4>
                        </div>
                        <div class="price-body">
                            <h5 class="pricing-title">
                                <span class="dolor">$</span>2189.00
                                <label>Per Month</label>

                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2 border-bottom">Creative Marketing</li>
                                <li class="py-2">-</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-outline-primary py-2" data-toggle="modal"
                                data-target="#exampleModalCenter2">
                                <i class="far fa-user"></i> Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //pricing -->

<!-- stats section -->
<div class="middlesection-agile py-5">
    <div class="container-fluid py-xl-5 py-lg-3">
        <div class="row">
            <div class="col-lg-6 left-build-wthree aboutright-agilewthree mt-0">
                <h4>Sell Your Best House</h4>
                <h6 class="mt-3 mb-5">Some words about our property</h6>
                <div class="row mb-xl-5 mb-4">
                    <div class="col-4 w3layouts_stats_left w3_counter_grid">
                        <i class="fas fa-bed"></i>
                        <p class="counter">6</p>
                        <p class="para-text-w3ls">Bedroom</p>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid2">
                        <i class="fas fa-bath"></i>
                        <p class="counter">4</p>
                        <p class="para-text-w3ls">Bathroom</p>
                    </div>
                    <div class="col-4 w3layouts_stats_left w3_counter_grid1">
                        <i class="fas fa-car"></i>
                        <p class="counter">2</p>
                        <p class="para-text-w3ls">Car Parking</p>
                    </div>
                </div>
                <p>Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Suspendisse interdum
                    velit vel qu dapibus condimentum. Pellentesque consequat.</p>
            </div>
            <div class="col-lg-6 text-lg-left text-center mt-lg-0 mt-md-5 mt-4">
                <img src="images/middle.jpg" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
<!-- //stats -->

<!-- testimonials -->
<div class="testimonials py-5" id="clients">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="tittle mb-2 text-white">What Clients Say</h3>
            <p class="test-title-paara">A few word about our Clients</p>
        </div>
        <div class="w3_testimonials_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3_testimonials_grid">
                                <p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod
                                    possimus, Nam Cumque nihil impedit
                                    quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                    omnis voluptas".</p>
                                <ul class="testi-w3ls-rate mt-4">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="mx-2">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="mx-2">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="row person-w3ls-testi mt-5">
                                    <div class="col-6 agile-left-test text-right">
                                        <img src="images/te1.jpg" alt=" " class="img-fluid rounded-circle" />
                                    </div>
                                    <div class="col-6 agile-right-test text-left mt-4">
                                        <h5>John Frank</h5>
                                        <p>Tempore Quo</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3_testimonials_grid">
                                <p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod
                                    possimus, Nam Cumque nihil impedit
                                    quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                    omnis voluptas".</p>
                                <ul class="testi-w3ls-rate mt-4">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="mx-2">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="mx-2">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="row person-w3ls-testi mt-5">
                                    <div class="col-6 agile-left-test text-right">
                                        <img src="images/te2.jpg" alt=" " class="img-fluid rounded-circle" />
                                    </div>
                                    <div class="col-6 agile-right-test text-left mt-4">
                                        <h5>John Frank</h5>
                                        <p>Tempore Quo</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3_testimonials_grid">
                                <p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod
                                    possimus, Nam Cumque nihil impedit
                                    quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                    omnis voluptas".</p>
                                <ul class="testi-w3ls-rate mt-4">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="mx-2">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="mx-2">
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="row person-w3ls-testi mt-5">
                                    <div class="col-6 agile-left-test text-right">
                                        <img src="images/te3.jpg" alt=" " class="img-fluid rounded-circle" />
                                    </div>
                                    <div class="col-6 agile-right-test text-left mt-4">
                                        <h5>John Frank</h5>
                                        <p>Tempore Quo</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- //testimonials -->

@include('layout.footer')
<!-- Js files -->
<!-- JavaScript -->


<!-- flexSlider (for testimonials) -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider (for testimonials) -->

<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

@endsection