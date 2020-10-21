@extends('layout.Mainlayout')
@section('title', 'About')

@section('head-script')
<!-- team deoslide -->
<link rel="stylesheet" href="css/jquery.desoslide.css">
<!-- team desoslide-JavaScript -->
<script src="js/jquery.desoslide.js"></script>
@endsection
@section('body-content')
<!-- banner -->
<div class="bannerbg-w3l bannerbg-w3l-inner">
    <!-- header -->
    @include('layout.headTop')
    <!--// header-top -->
    <!-- banner-text -->
    <div class="banner-w3ltext about-w3bnr">
        <div class="container">
            <h1 class="text-white text-center">
                <a href="index.html">Home</a> / About Us</h1>
        </div>
    </div>
    <!-- //banner-text -->
</div>
<!-- login -->
@include('Auth.login')
<!-- //login -->
<!-- register -->
@include('Auth.register')
<!--//register-->
<!-- //banner -->

<!-- about -->
<div class="features py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="tittle mb-2">About Us</h3>
            <p>Some words about our property</p>
        </div>
        <div class="row features-row">
            <div class="col-lg-5 features-right mt-3">
                <img src="images/about.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-7 features-left mt-lg-0 mt-5">
                <div class="row features-grid">
                    <div class="col-3 features-grid-left text-right">
                        <i class="fab fa-blackberry"></i>
                    </div>
                    <div class="col-9 features-grid-right">
                        <h4 class="mb-2">Itaque earum rerum </h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum </p>
                    </div>
                </div>
                <div class="row features-grid features-grid-mdl my-4">
                    <div class="col-3 features-grid-left text-right">
                        <i class="fab fa-d-and-d"></i>
                    </div>
                    <div class="col-9 features-grid-right">
                        <h4 class="mb-2">Sapiente delectus</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum </p>
                    </div>
                </div>
                <div class="row features-grid">
                    <div class="col-3 features-grid-left text-right">
                        <i class="fab fa-mixcloud"></i>
                    </div>
                    <div class="col-9 features-grid-right">
                        <h4 class="mb-2">Itaque earum rerum </h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //about -->

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

<!-- team -->
<div class="team py-5" id="agents">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="tittle mb-2">Our Agents</h3>
            <p>Some words about our Agents</p>
        </div>
        <div class="row new-agileinfo">
            <div class="col-lg-4 team-left">
                <ul id="demo1_thumbs" class="list-inline">
                    <li>
                        <a href="images/t1.jpg">
                            <img src="images/t1.jpg" alt=""
                                data-desoslide-caption="<h3>Carolyn Kylie</h3>  Eligendi optio nam libero tempore cum soluta nobis est cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus">
                            <div class="team-w3text mt-3">
                                <h4 class="mb-2">Carolyn Kylie</h4>
                                <p>Fugiat nulltur</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="images/t2.jpg">
                            <img src="images/t2.jpg" alt=""
                                data-desoslide-caption="<h3>Brian Una</h3>  Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus">
                            <div class="team-w3text mt-3">
                                <h4 class="mb-2">Brian Una</h4>
                                <p>Omnis voluptnda</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="images/t3.jpg">
                            <img src="images/t3.jpg" alt=""
                                data-desoslide-caption="<h3>David Joe</h3>  Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus">
                            <div class="team-w3text mt-3">
                                <h4 class="mb-2">David Joe</h4>
                                <p>Iste natus error</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="images/t4.jpg">
                            <img src="images/t4.jpg" alt=""
                                data-desoslide-caption="<h3>Piers Sam</h3>  Eligendi optio nam libero tempore cum soluta nobis est cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus">
                            <div class="team-w3text mt-3">
                                <h4 class="mb-2">Piers Sam</h4>
                                <p>Excepteur singt</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="demo1_main_image" class="col-lg-8 team-right"></div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->

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

<!-- footer top -->
@include('layout.footer')

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

<script>
    $('#demo1_thumbs').desoSlide({
        main: {
            container: '#demo1_main_image',
            cssClass: 'img-responsive'
        },
        effect: 'sideFade',
        caption: true
    });
</script>
<!-- //team desoslide-JavaScript -->
@endsection