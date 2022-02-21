@extends('frontend.layouts.master')

@section('content')
<!--=======Banner-Section Starts Here=======-->
<section class="hero-section bg_img" data-background="https://www.5stark.com/public/assets/nt/assets/images/about/1920x680-login.png">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Login</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="https://www.5stark.com">Home</a>
                </li>
                <li>
                    Login
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
            <div class="col-lg-12">
                <div class="section-header left-style">
                    <span class="cate">Login To Enter</span>
                    <h2 class="title">Please enter the valid email address and password to log in.</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-8  col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <!-- DEBUG-VIEW START 4 SYSTEMPATH/Validation/Views/list.php -->

<!-- DEBUG-VIEW ENDED 4 SYSTEMPATH/Validation/Views/list.php -->
                                            </div>
                </div>
            </div>
            <form action="https://www.5stark.com/user/checkuser" class="frgpaswd" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="8b6bbf67c2fab17ce09698d46752e51a" />            <div class="row brdresi">
                <div class="col-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="" name="email" value=""  autofocus="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control skzSPass" id="password" placeholder="" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="thmebutton">Login</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <div class="powrper">
                            <p class="text-right rcoln ">Not a member yet? <a class="skznbtnshl" href="https://www.5stark.com/register">Register Now</a></p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <a class="btn btn-link setEmail skzsemail"  href="javascript:void(0)">
                                    Forgot Your Password?
                                </a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<!--=======About-Section Ends Here=======-->
@endsection