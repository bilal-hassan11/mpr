@extends('frontend.layouts.master')

@section('content')
<!--=======Banner-Section Starts Here=======-->
<section class="hero-section bg_img" data-background="https://www.5stark.com/public/assets/nt/assets/images/about/1920x680-register.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Register</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="https://www.5stark.com">Home</a>
                </li>
                <li>
                    Register
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=======Banner-Section Ends Here=======-->


<!--=======Feature-Section Starts Here=======-->
<section class="faq-section padding-top padding-bottom mb-xl-5">
    <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="https://www.5stark.com/public/assets/nt/assets/images/balls/ball-group7.png" alt="balls">
    </div>
    <div class="ball-group-2 rtl" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="https://www.5stark.com/public/assets/nt/assets/images/balls/ball-group8.png" alt="balls">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-header">
                    <span class="cate">Register To Enter</span>
                    <h2 class="title">
                        we have answers
                    </h2>
                    <p class="mw-100">
                        If you don't find the details you are searching for, do not hesitate to contact us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row brdresi">
            <div class="col-md-12 col-lg-12 col-sm-12  col-xs-12">
                <div class="sinerror">
                    <!-- DEBUG-VIEW START 7 SYSTEMPATH/Validation/Views/list.php -->

<!-- DEBUG-VIEW ENDED 7 SYSTEMPATH/Validation/Views/list.php -->
                </div>
                                <div class="card-body">
                    <form action="{{ route('fronts.registeration') }}" id="userRegistration" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8" class="ajaxform">
                        <input type="hidden" name="csrf_test_name" value="8b6bbf67c2fab17ce09698d46752e51a" />                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Your Name<span class="red">*</span>
                                </label>
                                <input type="text" name="user_name" value=""  class="form-control&#x20;user_name" placeholder="Please&#x20;Enter&#x20;Your&#x20;Name" id="" required/>
                                <input type="hidden" name="xceep" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Referral ID
                                </label>
                                <input type="text" name="ref_id" value=""  class="form-control&#x20;con_person" placeholder="Please&#x20;Enter&#x20;Your&#x20;Referral&#x20;ID" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Email<span class="red">*</span>
                                </label>
                                <input type="text" name="email" value=""  class="form-control&#x20;email" placeholder="Please&#x20;Enter&#x20;Your&#x20;Email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group skzPHoneN">
                                <label>
                                    Mobile<span class="red">*</span>
                                </label>
                                <br>
                                <input id="phone" name="phone" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="" type="tel" class="form-control mobile" maxlength="20">
                                <input type="hidden" name="relPhone" id="skzPhone" value="">
                                <span id="output"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group eyConPassSkz">
                                <label>
                                    Password<span class="red">*</span>
                                </label>

                                <input type="password" name="password" value=""  class="form-control&#x20;password&#x20;skzSPass" id="password" placeholder="Enter&#x20;Your&#x20;Password" />
                                <div id="password_strngth" style="display: none;">
                                    <small id="password_capital" style="color: #dc3545;">The password must contain at least 1 uppercase letters.<br></small>
                                    <small id="password_digit" style="color: #dc3545;">The password must contain at least 1 digit.<br></small>
                                    <small id="password_special" style="color: #dc3545;">The password must contain at least 1 special character.<br></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group eyConPassSkz">
                                <label>
                                    Confirm Password<span class="red">*</span>
                                </label>
                                <input type="password" name="conf_password" value=""  class="form-control&#x20;conf_password&#x20;skzSPassCon" placeholder="Confirm&#x20;Your&#x20;Password" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="float-right"> Captcha is required </span>
                                <label>
                                    <span class="red" id="captchaOperation">*</span>
                                </label>
                                <div class=""><div ></div></div>
                                <input type="text" name="captcha" class="form-control ba b--black-20 pa2 mb2 db w-100" />
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input rmvinclss" value="1" type="checkbox"  id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Subscribe to our 5stark newsletter for all the latest updates.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rmvinclss" type="checkbox" value="1" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Agreed our terms & conditions and privacy policy
                                </label>
                            </div>
                        </div>
                    </div>-->

                    <div class="row">
                        <div class="col-md-12">
                            <button class="thmebutton" type="submit" id="btn-user-register">Submit</button>
                        </div>
                    </div>
                    </form>                </div>
            </div>
        </div>
    </div>
</section>
<!--=======Feature-Section Ends Here=======-->
@endsection