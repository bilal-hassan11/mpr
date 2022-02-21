@extends('frontend.layouts.master')

@section('content')

<!-- DEBUG-VIEW ENDED 4 APPPATH/Config/../Views/header/navbar.php -->
<!-- DEBUG-VIEW START 5 APPPATH/Config/../Views/content/about.php -->

<!--=======Banner-Section Starts Here=======-->
<section class="hero-section bg_img" data-background="{{ asset('frontend_assets/images/about/aboutus.png') }} ">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">About US</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('fronts.home') }}">Home</a>
                </li>
                <li>
                    About Us
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=======Banner-Section Ends Here=======-->


<!--=======About-Section Starts Here=======-->
<section class="about-section padding-top padding-bottom section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block rtl">
                <img src="{{ asset('frontend_assets/images/about/about.jfif') }}" alt="about">
            </div>
            <div class="col-lg-6">
                <div class="section-header left-style">
                    <span class="cate">WELCOME TO MPR</span>
                    <h2 class="title">MPR</h2>
                    <p>
                        Joining the MPR is the perfect way to get the best percentage choices, clear investment strategies, and incredible ROI (Return on investment).
                    </p>
                </div>
                <div class="about--content">
                    <div class="about-item">
                        <div class="about-thumb">
                            <img src="{{ asset('frontend_assets/images/about/secure&reliable.png') }}" alt="about">
                        </div>
                        <div class="about-content">
                            <h5 class="title">Secure & Reliable</h5>
                            <p>
                                Secure assets fund for users
                            </p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-thumb">
                            <img src="{{ asset('frontend_assets/images/about/FastWithdrawl.png') }}" alt="about">
                        </div>
                        <div class="about-content">
                            <h5 class="title">Fast Withdrawals</h5>
                            <p>
                                For users, fast money withdrawal solutions
                            </p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-thumb">
                            <img src="{{ asset('frontend_assets/images/about/Guaranteed.png') }}" alt="about">
                        </div>
                        <div class="about-content">
                            <h5 class="title">Guaranteed</h5>
                            <p>
                                You're sure to get a return on your investment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======About-Section Ends Here=======-->


<!--=======Mission-Section Starts Here=======-->
<section class="mission-section padding-top padding-bottom">
    <div class="mission-shape">
        <img src="{{ asset('frontend_assets/images/about/mission-shape.png') }}" alt="about">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-header">
                    <span class="cate">Our company's goal is to enable our customers</span>
                    <h2 class="title">
                        To maximize their Money
                    </h2>
                    <p class="mw-100">
                        We are a worldwide investment company that focuses on maximizing revenue and mitigating risk.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 rtl">
                <div class="mission--thumb">
                    <img class="wow slideInLeft" src="{{ asset('frontend_assets/images/about/850x498.png') }}" alt="about">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mission-wrapper owl-theme owl-carousel">
                    <div class="mission-item">
                        <div class="mission-thumb">
                            <img src="{{ asset('frontend_assets/images/about/MinimumInvest.png') }}" alt="mission">
                        </div>
                        <div class="mission-content">
                            <h5 class="title">Minimum invest</h5>
                            <p>
                                Start investment as low as 100$
                            </p>
                        </div>
                    </div>
                    <div class="mission-item">
                        <div class="mission-thumb">
                            <img src="{{ asset('frontend_assets/images/about/DailyProfit.png') }}" alt="mission">
                        </div>
                        <div class="mission-content">
                            <h5 class="title">Daily Profit</h5>
                            <p>
                                Make a profit on a daily basis
                            </p>
                        </div>
                    </div>
                    <div class="mission-item">
                        <div class="mission-thumb">
                            <img src="{{ asset('frontend_assets/images/about/Max-Return.png') }}" alt="mission">
                        </div>
                        <div class="mission-content">
                            <h5 class="title">Max. returns</h5>
                            <p>
                                The highest return on your investment.
                            </p>
                        </div>
                    </div>
                    <div class="mission-item">
                        <div class="mission-thumb">
                            <img src="{{ asset('frontend_assets/images/mission/referrels.png') }}" alt="mission">
                        </div>
                        <div class="mission-content">
                            <h5 class="title">Referrals</h5>
                            <p>
                                Participate in our referral program and earn bonuses on a monthly basis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Mission-Section Ends Here=======-->




<!--=======Check-Section Starts Here=======-->
<section class="call-section call-overlay bg_img" data-background="{{ asset('frontend_assets/images/call/call-bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-xl-6">
                <div class="call-item text-center text-sm-left">
                    <div class="call-icon">
                        <img src="{{ asset('frontend_assets/images/call/icon01.png') }}" alt="call">
                    </div>
                    <div class="call-content">
                        <h5 class="title">Happy to get off with your earnings, Start it Now</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                <a href="{{ route('fronts.register') }}" class="custom-button">Start Now <i class="flaticon-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!--=======Check-Section Ends Here=======-->


<!--=======Check-Section Starts Here=======-->
<section class="client-section padding-bottom padding-top">
    <div class="background-map">
        <img src="{{ asset('frontend_assets/images/client/client-bg.png') }}" alt="client">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="section-header left-style">
                    <span class="cate">TESTIMONIALS</span>
                    <h2 class="title"><span>17 K</span> HAPPY CLIENTS AROUND THE WORLD</h2>
                    <p class="mw-500">
                        Have a look to see what our clients have to suggest about us; we value their views and love their congratulations.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9">
                <div class="m--30">
                    <div class="client-slider owl-carousel owl-theme">
                        <div class="client-item">
                            <div class="client-content">
                                <p>
                                    "I am very pleased with the amount of returns I am getting through my investments"
                                </p>
                                <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <a href="#0">
                                    <img src="{{ asset('frontend_assets/images/uzma.jpg') }}" alt="client">
                                </a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-content">
                                <p>
                                    I have been working with 5 Stark for more than a year.
                                </p>
                                <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                    <span>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <a href="#0">
                                    <img src="{{ asset('frontend_assets/images/man.png') }}" alt="client">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Check-Section Ends Here=======-->
@endsection