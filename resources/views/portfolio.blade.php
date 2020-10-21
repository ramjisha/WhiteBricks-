@extends('layout.Mainlayout')
@section('title', 'Portfolio')

@section('head-script')
<!-- gallery  -->
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
@endsection
@section('body-content')
<!-- banner -->
<div class="bannerbg-w3l bannerbg-w3l-inner">
    <!-- //header -->
    @include('layout.headTop')
    <!-- banner-text -->
    <div class="banner-w3ltext about-w3bnr">
        <div class="container">
            <h1 class="text-white text-center">
                <a href="index.html">Home</a> / Portfolio</h1>
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

<!-- gallery -->
<section class="wthree-row w3-gallery py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="tittle mb-2">Portfolio</h3>
            <p>See Our Portfolio</p>
        </div>
        <ul class="portfolio-categ filter mb-5 pb-4 text-center border-bottom">
            <li class="port-filter all active">
                <a href="#">All</a>
            </li>
            <li class="cat-item-1">
                <a href="#" title="Category 1">Bedroom</a>
            </li>
            <li class="cat-item-2">
                <a href="#" title="Category 2">Bathroom</a>
            </li>
            <li class="cat-item-3">
                <a href="#" title="Category 3">Kitchen</a>
            </li>
            <li class="cat-item-4">
                <a href="#" title="Category 4">Living Room</a>
            </li>
            <li class="cat-item-5">
                <a href="#" title="Category 5">Office</a>
            </li>
            <li class="cat-item-6">
                <a href="#" title="Category 6">Pool</a>
            </li>
        </ul>
        <ul class="portfolio-area clearfix">
            <li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
                <span class="image-block">
                    <a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
                <span class="image-block">
                    <a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g2.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
                <span class="image-block">
                    <a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
                <span class="image-block">
                    <a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g4.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
                <span class="image-block">
                    <a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g5.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-6" data-type="cat-item-6">
                <span class="image-block">
                    <a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g6.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                <span class="image-block">
                    <a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g7.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
                <span class="image-block">
                    <a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g8.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
            <li class="portfolio-item2" data-id="id-5" data-type="cat-item-5">
                <span class="image-block">
                    <a class="image-zoom" href="images/g9.jpg" data-gal="prettyPhoto[gallery]">
                        <img src="images/g9.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
                    </a>
                </span>
            </li>
        </ul>
        <!--end portfolio-area -->
    </div>
    <!-- //gallery container -->
</section>
<!-- //gallery -->

@include('layout.footer')
<!-- move-top -->
<script src="js/move-top.js"></script>
<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
<script src="js/jquery-1.7.2.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

@endsection