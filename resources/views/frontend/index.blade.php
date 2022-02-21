@extends('frontend.layouts.master')

@section('content')
<!-- DEBUG-VIEW ENDED 3 APPPATH/Config/../Views/header/navbar.php -->
<!-- DEBUG-VIEW START 4 APPPATH/Config/../Views/header/Homebanner.php -->
<!--=======Banner-Section Starts Here=======-->
<section class="banner-section" id="home">
    <div class="banner-bg d-lg-none">
        <img src="{{ asset('frontend_assets/images/banner/banner-bg2.jpg') }}" alt="banner">
    </div>
    <div class="banner-bg d-none d-lg-block bg_img" data-background="{{ asset('frontend_assets/images/banner/banner1.jpg') }}">
        <div class="chart-1 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration=".7s">
            <img src="{{ asset('frontend_assets/images/banner/chart1.png') }}" alt="banner">
        </div>
        <div class="chart-2 wow fadeInDown" data-wow-delay="1s" data-wow-duration=".7s">
            <img src="{{ asset('frontend_assets/images/banner/chart2.png') }}" alt="banner">
        </div>
        <div class="chart-3 wow fadeInRight" data-wow-delay="1.5s" data-wow-duration=".7s">
            <img src="{{ asset('frontend_assets/images/banner/chart3.png') }}" alt="banner">
        </div>
        <div class="chart-4 wow fadeInUp" data-wow-delay="2s" data-wow-duration=".7s">
            <img src="{{ asset('frontend_assets/images/banner/clock.png') }}" alt="banner">
        </div>
    </div>
    <div class="animation-area d-none d-lg-block">
        <div class="plot">
            <img src="{{ asset('frontend_assets/images/banner/plot.png') }}" alt="banner">
        </div>
        <div class="element-1 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/light.png') }}" alt="banner">
        </div>
        <div class="element-2 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin1.png') }}" alt="banner">
        </div>
        <div class="element-3 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin2.png') }}" alt="banner">
        </div>
        <div class="element-4 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin3.png') }}" alt="banner">
        </div>
        <div class="element-5 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin4.png') }}" alt="banner">
        </div>
        <div class="element-6 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin5.png') }}" alt="banner">
        </div>
        <div class="element-7 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin6.png') }}" alt="banner">
        </div>
        <div class="element-8 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/sheild.png') }}" alt="banner">
        </div>
        <div class="element-9 wow fadeIn" data-wow-delay="1s">
            <img src="{{ asset('frontend_assets/images/banner/coin7.png') }}" alt="banner">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                <div class="banner-content">
                    <h1 class="title">Simply <span>Profitably </span> Conveniently</h1>
                    <p>
                        Good platform for profitable investment
                    </p>
                    <div class="button-group">
                        <a href="https://www.5stark.com/login" class="custom-button">Get Started Now!</a>
                        <!--<a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="popup video-button"><i class="flaticon-play"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Banner-Section Ends Here=======-->
<!-- DEBUG-VIEW ENDED 4 APPPATH/Config/../Views/header/Homebanner.php -->
<!-- DEBUG-VIEW START 5 APPPATH/Config/../Views/content/MainHome.php -->
<!--=======Counter-Section Starts Here=======-->
<div class="counter-section">
    <div class="container">
        <div class="row align-items-center mb-30-none justify-content-center">
            <div class="col-sm-6 col-md-4">
                <div class="counter-item">
                    <div class="counter-thumb">
                        <img src="{{ asset('frontend_assets/images/counter/RegisteredUsers.png') }}" alt="counter">
                    </div>
                    <div class="counter-content">
                        <div class="counter-header">

                            <h3 class="title odometer" data-odometer-final="17.9">0</h3><h3 class="title">K</h3>
                        </div>
                        <p>Registered users</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="counter-item">
                    <div class="counter-thumb">
                        <img src="{{ asset('frontend_assets/images/counter/CountriesSupported.png') }}" alt="counter">
                    </div>
                    <div class="counter-content">
                        <div class="counter-header">
                            <h3 class="title odometer" data-odometer-final="20">0</h3>
                        </div>
                        <p>Countries Supported</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="counter-item">
                    <div class="counter-thumb">
                        <img src="{{ asset('frontend_assets/images/counter/averageInvestment.png') }}" alt="counter">
                    </div>
                    <div class="counter-content">
                        <div class="counter-header">
                            <h3 class="title">$</h3><h3 class="odometer title" data-odometer-final="100">0</h3><h3 class="title"></h3>
                        </div>
                        <p>Minimum Investment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=======Counter-Section Ends Here=======-->


<!--=======About-Section Starts Here=======-->
<section class="about-section padding-top padding-bottom" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block rtl">
                <img src="{{ asset('frontend_assets/images/about/about.jfif') }}" alt="about">
            </div>
            <div class="col-lg-6">
                <div class="section-header left-style">
                    <span class="cate">WELCOME TO 5STARK</span>
                    <h2 class="title">about 5STARK</h2>
                    <p>
                        Joining the 5Stark is the perfect way to get the best percentage choices, clear investment strategies, and incredible ROI (Return on investment).
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


<!--=======Feature-Section Starts Here=======-->
<section class="feature-section padding-top padding-bottom bg_img" data-background="{{ asset('frontend_assets/images/feature/feature-bg.png') }}" id="feature">
    <div class="ball-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball1.png') }}" alt="balls">
    </div>
    <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball2.png') }}" alt="balls">
    </div>
    <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball3.png') }}" alt="balls">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-header">
                    <span class="cate">Our Amazing Features</span>
                    <h2 class="title">
                        why should you invest
                    </h2>
                    <p class="mw-100">
                        Our company is a worldwide investment company committed to revenue generation for our clients and reduction of financial risks when investing in our company.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center feature-wrapper">
            <div class="col-md-6 col-sm-10 col-lg-4">
                <div class="feature-item">
                    <div class="feature-thumb">
                        <img src="{{ asset('frontend_assets/images/feature/profitableInvestment.png') }}" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h5 class="title">Profitable Investment</h5>
                        <p>Our company guarantees profitable investment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-10 col-lg-4">
                <div class="feature-item">
                    <div class="feature-thumb">
                        <img src="{{ asset('frontend_assets/images/feature/DDS-protection.png') }}" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h5 class="title">Protection</h5>
                        <p>
                            We're here to provide you with high-level support and protection.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-10 col-lg-4">
                <div class="feature-item">
                    <div class="feature-thumb">
                        <img src="{{ asset('frontend_assets/images/feature/24hourrSupport.png') }}" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h5 class="title">Support Center</h5>
                        <p>For any query of clients and users, there is a support center.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Feature-Section Ends Here=======-->


<!--=======How-Section Starts Here=======-->
<section class="get-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-header">
                    <span class="cate">get to know</span>
                    <h2 class="title">how we work?</h2>
                    <p>
                        Follow the below steps and register with our company
                    </p>
                </div>
            </div>
        </div>
        <div class="hover-tab">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="hover-tab-area">
                        <div class="tab-area">
                            <div class="tab-item active first">
                                <img src="{{ asset('frontend_assets/images/how/how01.jfif') }}" alt="how">
                            </div>
                            <div class="tab-item second">
                                <img src="{{ asset('frontend_assets/images/how/how02.png') }}" alt="how">
                            </div>
                            <div class="tab-item third">
                                <img src="{{ asset('frontend_assets/images/how/how03.png') }}" alt="how">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="hover-tab-menu">
                        <ul class="tab-menu">
                            <li class="active">
                                <div class="menu-thumb">
                                            <span>
                                                01
                                            </span>
                                </div>
                                <div class="menu-content">
                                    <h5 class="title">Instant  registration</h5>
                                    <p>
                                        Click <a href="https://www.5stark.com/register">Sign Up</a> to fill the form, our 256 SSL will Protect your privacy.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="menu-thumb">
                                            <span>
                                                02
                                            </span>
                                </div>
                                <div class="menu-content">
                                    <h5 class="title">MAKE AN INVEST</h5>
                                    <p>
                                        After <a href="https://www.5stark.com/login">Login</a> , purchase a plan for investments.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="menu-thumb">
                                            <span>
                                                03
                                            </span>
                                </div>
                                <div class="menu-content">
                                    <h5 class="title">get profit</h5>
                                    <p>
                                        You can earn your profit & bonus on your profile, as well as getting Instant Payment.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======How-Section Ends Here=======-->


<!--=======Check-Section Starts Here=======-->
<section class="call-section call-overlay bg_img" data-background="{{ asset('frontend_assets/images/call/call-bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="call--item">
                    <span class="cate">Why We are always ready</span>
                    <h3 class="title">Request a call back</h3>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="call-button">
                    <a href="Tel:+971 56 396 0255" class="call">
                        <img src="{{ asset('frontend_assets/images/call/icon02.png') }}" alt="call">
                    </a>
                    <a href="https://www.5stark.com/contact" class="custom-button"> Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Check-Section Ends Here=======-->


<!--=======Offer-Section Stars Here=======-->
<section class="offer-section padding-top padding-bottom pb-max-md-0" id="plan">
    <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball-group1.png') }}" alt="balls">
    </div>
    <div class="ball-group-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball-group2.png') }}" alt="balls">
    </div>
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="section-header">
                        <span class="cate">INVESTMENT OFFER</span>
                        <h2 class="title">OUR INVESTMENT PLANS</h2>
                        <p>
                            5STARK offers straightforward investment plans that are easy for investors to make more profits.
                        </p>
                    </div>
                </div>
            </div>
            <div class="offer-wrapper">
                                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">
                            7% to 12%                        </h3>
                        <span>
                            <b>
                                Basic Plan                            </b>
                        </span>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="{{ asset('frontend_assets/images/offer/offer1.png') }}" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Deposit</h5>
                                <h5 class="subtitle">
                                    <span class="min">$
                                    100                                    </span>
                                    <span class="to">to</span>
                                    <span class="max">$
                                    999                                    </span>
                                </h5>
                                <div class="">
                                        <span>
                                         Activation Charges
                                    </span>
                                    <span>
                                        $10                                    </span>
                                </div>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="{{ asset('frontend_assets/images/offer/offer2.png') }}" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Commission </h5>
                                <h5 class="subtitle">
                                    2 Levels
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <!--<span style="display: block">
                                         Activation Charges
                                    </span>
                        <span style="display: block">
                                                                            </span>-->
                        <a href="https://www.5stark.com/login" class="custom-button">invest now</a>
                    </div>
                </div>
                                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">
                            7% to 12%                        </h3>
                        <span>
                            <b>
                                Silver plan                            </b>
                        </span>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="{{ asset('frontend_assets/images/offer/offer1.png') }}" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Deposit</h5>
                                <h5 class="subtitle">
                                    <span class="min">$
                                    1000                                    </span>
                                    <span class="to">to</span>
                                    <span class="max">$
                                    2999                                    </span>
                                </h5>
                                <div class="">
                                        <span>
                                         Activation Charges
                                    </span>
                                    <span>
                                        $10                                    </span>
                                </div>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="{{ asset('frontend_assets/images/offer/offer2.png') }}" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Commission </h5>
                                <h5 class="subtitle">
                                    4 Levels
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <!--<span style="display: block">
                                         Activation Charges
                                    </span>
                        <span style="display: block">
                                                                            </span>-->
                        <a href="https://www.5stark.com/login" class="custom-button">invest now</a>
                    </div>
                </div>
                                <div class="offer-item">
                    <div class="offer-header">
                        <h3 class="title">
                            7% to 12%                        </h3>
                        <span>
                            <b>
                                Gold plan                            </b>
                        </span>
                    </div>
                    <div class="offer-body">
                        <span class="bal-shape"></span>
                        <div class="item first">
                            <div class="item-thumb">
                                <img src="{{ asset('frontend_assets/images/offer/offer1.png') }}" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Deposit</h5>
                                <h5 class="subtitle">
                                    <span class="min">$
                                    3000                                    </span>
                                    <span class="to">to</span>
                                    <span class="max">$
                                    10000000                                    </span>
                                </h5>
                                <div class="">
                                        <span>
                                         Activation Charges
                                    </span>
                                    <span>
                                        $10                                    </span>
                                </div>
                            </div>
                        </div>
                        <span class="bal-shape"></span>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="{{ asset('frontend_assets/images/offer/offer2.png') }}" alt="offer">
                            </div>
                            <div class="item-content">
                                <h5 class="title">Commission </h5>
                                <h5 class="subtitle">
                                    6 Levels
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="offer-footer">
                        <!--<span style="display: block">
                                         Activation Charges
                                    </span>
                        <span style="display: block">
                                                                            </span>-->
                        <a href="https://www.5stark.com/login" class="custom-button">invest now</a>
                    </div>
                </div>
                            </div>
        </div>
    </section>
<!--=======Offer-Section Ends Here=======-->


<!--=======Proit-Section Starts Here=======-->
<section class="profit-section padding-top" id="profit">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="section-header">
                    <span class="cate">Calculate the incredible profits</span>
                    <h2 class="title">You Can Earn</h2>
                    <p>The calculator would show you the least profit you will gain from your investment.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="profit-bg bg_img" data-background="{{ asset('frontend_assets/images/profit/profit-bg.jfif') }}">
            <div class="animation-group">
                <div class="platform">
                    <img src="{{ asset('frontend_assets/images/profit/platform.png') }}" alt="profit">
                </div>
                <div class="light">
                    <img src="{{ asset('frontend_assets/images/profit/light.png') }}" alt="profit">
                </div>
                <div class="coin-1 wow fadeOutDown" data-wow-delay="1s">
                    <img src="{{ asset('frontend_assets/images/profit/coin6.png') }}" alt="profit">
                </div>
                <div class="coin-2 wow fadeOutDown" data-wow-delay="1s">
                    <img src="{{ asset('frontend_assets/images/profit/coin2.png') }}" alt="profit">
                </div>
                <div class="coin-3 wow fadeOutDown" data-wow-delay="1s">
                    <img src="{{ asset('frontend_assets/images/profit/coin3.png') }}" alt="profit">
                </div>
                <div class="coin-4 wow fadeOutDown" data-wow-delay="1s">
                    <img src="{{ asset('frontend_assets/images/profit/coin4.png') }}" alt="profit">
                </div>
                <div class="coin-5 wow fadeOutDown" data-wow-delay="1s">
                    <img src="{{ asset('frontend_assets/images/profit/coin5.png') }}" alt="profit">
                </div>
                <div class="coin-6 wow fadeOutDown" data-wow-delay="1s">
                    <img src="{{ asset('frontend_assets/images/profit/coin1.jfif') }}" alt="profit">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="calculate-wrapper tab">
            <div class="calculate--area">
                <div class="calculate-area">
                    <div class="calculate-item">
                        <h5 class="title" data-serial="01">Select the currency</h5>
                        <ul class="tab-menu">
                            <li class="active" id="skzcurrency">usd</li>
                        </ul>
                    </div>
                    <div class="calculate-item">
                        <h5 class="title" data-serial="02">Enter the amount</h5>
                        <input id="amountskz" type="number" value="100">
                    </div>
                    <div class="calculate-item">
                        <h5 class="title" data-serial="03">Calculate</h5>
                        <button id="skzcalculator" class="custom-button">Show Now</button>
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <div class="profit-calc">
                            <div class="item">
                                <span class="cate">Daily Profit</span>
                                <h2 class="title cl-theme-1 dailyprofit">0.38 USD*</h2>
                            </div>
                            <div class="item">
                                <span class="cate">Monthly Profit</span>
                                <h2 class="title cl-theme skztamnt">8.5 USD*</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Proit-Section Ends Here=======-->




<!--=======Affiliate-Section Starts Here=======-->
<section class="affiliate-programe" id="affiliate">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 padding-bottom padding-top">
                <div class="section-header left-style">
                    <span class="cate">What You’ll Get As</span>
                    <h2 class="title fz-md-49">Referrals Program</h2>
                    <p>
                        Refer other users to gain money, and you can get the six-level referrals incentive, based on your package.
                    </p>
                </div>
                <div class="affiliate-wrapper">
                    <div class="affiliate-item">
                        <div class="affiliate-inner">
                            <div class="affiliate-thumb">
                                <h3 class="title">2</h3>
                                <span class="remainder">%</span>
                                <span class="cont">1st</span>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-item cl-two">
                        <div class="affiliate-inner">
                            <div class="affiliate-thumb">
                                <h3 class="title">1.5</h3>
                                <span class="remainder">%</span>
                                <span class="cont">2nd</span>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-item cl-three">
                        <div class="affiliate-inner">
                            <div class="affiliate-thumb">
                                <h3 class="title">1</h3>
                                <span class="remainder">%</span>
                                <span class="cont">3rd</span>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-item">
                        <div class="affiliate-inner">
                            <div class="affiliate-thumb">
                                <h3 class="title">0.5</h3>
                                <span class="remainder">%</span>
                                <span class="cont">4th</span>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-item cl-two">
                        <div class="affiliate-inner">
                            <div class="affiliate-thumb">
                                <h3 class="title">0.5</h3>
                                <span class="remainder">%</span>
                                <span class="cont">5th</span>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-item cl-three">
                        <div class="affiliate-inner">
                            <div class="affiliate-thumb">
                                <h3 class="title">0.5</h3>
                                <span class="remainder">%</span>
                                <span class="cont">6th</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="affiliate-bottom">
                    <h6 class="title">Make money with MPR(Sign of Trust)</h6>
                    <a href="https://www.5stark.com/about" class="custom-button">
                        learn more <i class="flaticon-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-lg-block d-none">
                <div class="afiliate-thumb">
                    <img src="{{ asset('frontend_assets/images/affiliate/affiliate.jfif') }}" alt="affiliate">
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Affiliate-Section Ends Here=======-->


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
                        <h5 class="title">Are you able to begin earnings?</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                <a href="https://www.5stark.com/login" class="custom-button">learn more <i class="flaticon-right"></i></a>
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
@endsection