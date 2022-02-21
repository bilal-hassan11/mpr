@extends('frontend.layouts.master')

@section('content')
<!--=======Banner-Section Starts Here=======-->
<section class="hero-section bg_img" data-background="{{ asset('frontend_assets/images/about/plans.png') }}">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Investment Plans</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('fronts.home') }}">Home</a>
                </li>
                <li>
                    Investment Plans
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=======Banner-Section Ends Here=======-->


<!--=======Offer-Section Stars Here=======-->
<section class="offer-section padding-top padding-bottom">
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
                                7% to 12%                            </h3>
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
                            <a href="{{ route('fronts.login') }}" class="custom-button">invest now</a>
                        </div>
                    </div>
                                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">
                                7% to 12%                            </h3>
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
                            <a href="{{ route('fronts.login') }}" class="custom-button">invest now</a>
                        </div>
                    </div>
                                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">
                                7% to 12%                            </h3>
                            <span>
                            <b>
                                Gold plan                            </b>
                        </span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="{{ asset('frontend_assets/images/offer/offer1.png')}}" alt="offer">
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
                            <a href="{{ route('fronts.login') }}" class="custom-button">invest now</a>
                        </div>
                    </div>
                            </div>
        </div>
    </section>
<!--=======Offer-Section Ends Here=======-->



<!--=======Proit-Section Starts Here=======-->
<section class="profit-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="section-header">
                    <span class="cate">Calculate the amazing profits</span>
                    <h2 class="title">You Can Earn</h2>
                    <p>Calculate your profit before making an investment.</p>
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


<!--=======Feature-Section Starts Here=======-->
<section class="faq-section padding-top padding-bottom bg_img" data-background="{{ asset('frontend_assets/images/feature/feature-bg.png') }}">
    <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball-group5.png') }}" alt="balls">
    </div>
    <div class="ball-group-2 rtl" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ asset('frontend_assets/images/balls/ball-group6.png') }}" alt="balls">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-header">
                    <span class="cate">You have questions</span>
                    <h2 class="title">
                        we have answers
                    </h2>
                    <p class="mw-100">
                        Do not hesitate to send us an email if you can't find what you're looking for.
                    </p>
                </div>
            </div>
        </div>
        <div class="faq-wrapper">
            <div class="faq-item active open">
                <div class="faq-title">
                    <h5 class="title">
                        What is 5Stark? What kind of work do you offer?
                    </h5>
                    <span class="right-icon"></span>
                </div>
                <div class="faq-content">
                    <p>

                        5Stark is an online trading company that gives your opportunity to invest your money and get the highest ROI and other benefits in return.

                    </p>
                </div>
            </div>
            <div class="faq-item ">
                <div class="faq-title">
                    <h5 class="title">
                        What is the payment method?
                    </h5>
                    <span class="right-icon"></span>
                </div>
                <div class="faq-content">
                    <p>

                        You can invest by contacting us through our registration form or just give us a call we will let you know complete details.

                    </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">
                    <h5 class="title">
                        How can I earn a profit?
                    </h5>
                    <span class="right-icon"></span>
                </div>
                <div class="faq-content">
                    <p>

                        It’s simple, start investing at 5Stark make a good return on investments, also. By referring another client and for his investment, you will receive good profits as a referral commission.

                    </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">
                    <h5 class="title">
                        How can I conduct an informal conversation with investors on 5-Stark?
                    </h5>
                    <span class="right-icon"></span>
                </div>
                <div class="faq-content">
                    <p>

                        Various apparatuses are incorporated with the 5 Stark platform that will allow you to interface and speak with a potential financial investor.
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-title">
                    <h5 class="title">

                        How do you choose your investments?

                    </h5>
                    <span class="right-icon"></span>
                </div>
                <div class="faq-content">
                    <p>
                        We need some details, and after that, you are good to go. Please contact us by email or call us at +971 56 396 0255

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Feature-Section Ends Here=======-->
@endsection