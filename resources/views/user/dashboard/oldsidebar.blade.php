<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ @$title }} || MPR</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/css/bootstrap.min.css') }}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/themefy_icon/themify-icons.css') }}" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/swiper_slider/css/swiper.min.css') }}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/select2/css/select2.min.css') }}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/niceselect/css/nice-select.css') }}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/owl_carousel/css/owl.carousel.css') }}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/gijgo/gijgo.min.css') }}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/tagsinput/tagsinput.css') }}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{ asset('user_assets/vendors/datepicker/date-picker.css') }}" />

    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/datatable/css/buttons.dataTables.min.css') }}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/text_editor/summernote-bs4.css') }}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/morris/morris.css') }}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/material_icon/material-icons.css') }}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('user_assets/css/metisMenu.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fornt_assets/css/colors/default.css') }}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">

<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="img/logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
          <a class="has-arrow"  href="#"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{ asset('user_assets/img/menu-icon/dashboard.svg') }}" alt="">
            <span>Dashboard</span>
          </a>
          

        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>My Profile</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>Cash Box</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>Deposits</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>My Profit</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </li>

          <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>My Bonus</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>Withdraw</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>Tickets</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>


        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
              <span>Referals</span>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </li>


      </ul>
    
</nav>