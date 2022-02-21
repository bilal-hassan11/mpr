@extends('frontend.layouts.master')

@section('content')
<section class="hero-section bg_img" data-background="{{ asset('frontend_assets/images/about/1920x680-FAQ.png') }}">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Faqs</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="https://www.5stark.com">Home</a>
                </li>
                <li>
                    Faqs
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=======Banner-Section Ends Here=======-->


<!--=======Feature-Section Starts Here=======-->
<section class="faq-section padding-top padding-bottom bg_img" data-background="https://www.5stark.com/public/assets/nt/assets/images/feature/feature-bg.png">
    <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="https://www.5stark.com/public/assets/nt/assets/images/balls/ball-group5.png" alt="balls">
    </div>
    <div class="ball-group-2 rtl" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="https://www.5stark.com/public/assets/nt/assets/images/balls/ball-group6.png" alt="balls">
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
                        What is MPR? What kind of work do you offer?
                    </h5>
                    <span class="right-icon"></span>
                </div>
                <div class="faq-content">
                    <p>

                        MPR is an online trading company that gives your opportunity to invest your money and get the highest ROI and other benefits in return.

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

                        It’s simple, start investing at MPr make a good return on investments, also. By referring another client and for his investment, you will receive good profits as a referral commission.

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