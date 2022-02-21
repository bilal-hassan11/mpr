@extends('frontend.layouts.master')

@section('content')
<!--=======Banner-Section Starts Here=======-->
<section class="hero-section bg_img" data-background="{{ asset('frontend_assets//images/about/1920x680-contact.png') }}">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Contact</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('fronts.home') }}">Home</a>
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=======Banner-Section Ends Here=======-->


<!--=======Contact-Section Starts Here=======-->
<section class="contact-section padding-bottom padding-top">
    <div class="container">
        <div class="contact-wrapper padding-top">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-xl-4 offset-xl-1">
                    <div class="contact-header">
                        <h4 class="title">Get in touch</h4>
                        <p>Ready to make life easier?</p>
                        <p>You can Directly Connect with us on Instagram !</p>
                        <a href="https://t.me/+3LBD1wKGELBkZWUx "><i class="fab fa-instagram"></i></a>
                            
                    </div>
                    <div class="contact-content">
                        <h4 class="title">Have questions?</h4>
                        <p>
                            Is there something We can assist you with about payments or pricing plans? We have a response for you!
                        </p>
                        <a href="{{ route('fronts.faq') }}"> Read F.A.Q <i class="flaticon-right-arrow"></i></a>

                    </div>
                </div>
                <div class="col-lg-5 offset-xl-1">
                    <div class="sinerror">
                        <!-- DEBUG-VIEW START 6 SYSTEMPATH/Validation/Views/list.php -->

<!-- DEBUG-VIEW ENDED 6 SYSTEMPATH/Validation/Views/list.php -->
                    </div>
                                                    </div>
            </div>
        </div>
    </div>
</section>
<!--=======Contact-Section Ends Here=======-->
@endsection