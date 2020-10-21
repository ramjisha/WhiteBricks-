@extends('layout.Mainlayout')
@section('title', 'contact')

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
                <a href="index.html">Home</a> / Contact Us</h1>
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

<!-- contact -->
<section class="wthree-row w3-contact py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="tittle mb-2">Contact Us</h3>
            <p>Quick Send Us Message</p>
        </div>
        <div class="row contact-form py-3">
            <!-- contact map -->
            <div class="col-lg-6 map text-center">
                <h4>Our world wide range of Branches </h4>
                <img src="images/map.jpg" alt="" class="img-fluid" />
            </div>
            <!-- //contact map -->
            <!-- contact form -->
            <div class="col-lg-6 wthree-form-left mt-lg-0 mt-5">
                <div class="contact-top1">
                    <form action="#" method="get" class="f-color">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="contact-formw3ls form-control" name="text" id="contactusername"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="contact-formw3ls form-control" name="email" id="contactemail"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea class="contact-formw3ls form-control" rows="5" id="contactcomment"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn submit contact-submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- //contact form -->
        </div>
    </div>
</section>
<!-- //contact -->

@include('layout.footer')

@endsection