<!--=======Header-Section Starts Here=======-->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <ul class="support-area">
                        <li>
                            <a href="{{ route('fronts.contact') }}"><i class="flaticon-support"></i>Support</a>
                        </li>
                        <li>
                            <a href="aamirkhanlaghari.9@gmail.com"><i class="flaticon-email"></i>aamirkhanlaghari.9@gmail.com </a>
                        </li>
                    </ul>
                </div>
                                    <div class="col-6">
                    <ul class="cart-area">
                        <li>
                            <a href="{{ route('fronts.register') }}">
                                    Register
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fronts.login') }}">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                                </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('frontend_assets/images/newLogo.jfif') }}" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="{{ route('fronts.home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('fronts.about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('fronts.referral') }}">Referrals</a>
                    </li>
                    <li>
                        <a href="{{ route('fronts.investment') }}">Plan</a>
                    </li>
                    <li>
                        <a href="{{ route('fronts.faq') }}">Faqs</a>
                    </li>
                    <li>
                        <a href="{{ route('fronts.contact') }}">Contact</a>
                    </li>
                                            <li class="pr-0">
                        <a href="{{ route('fronts.register') }}" class="custom-button">Join Us</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=======Header-Section Ends Here=======-->