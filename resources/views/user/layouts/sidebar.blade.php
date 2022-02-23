<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mpr sign Of Trust</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    
    <link rel="stylesheet" href="{{ asset('user_assets/css/colors/default.css') }}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
    


 <!-- sidebar  -->
 <!-- sidebar part here -->
 <nav class="sidebar">
  <div class="logo d-flex justify-content-between">
      <a href="index.html"><img src="{{ asset('frontend_assets/images/newLogo.jfif') }}" alt=""></a>
      <div class="sidebar_close_icon d-lg-none">
          <i class="ti-close"></i>
      </div>
  </div>

  <ul id="sidebar_menu">
      <li class="">
        @if(@Auth::User()->user_status == 'admin')
        @else
        <a class="has-arrow"  href="{{ route('users.dashboard') }}"  aria-expanded="false">
        <img src="{{ asset('user_assets/img/menu-icon/dashboard.svg') }}" alt="">
          <span>Dashboard</span>
        </a>
        @endif
      </li>
      <li class="">
        <a   class="has-arrow" href="{{ route('users.profile') }}" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/2.svg') }}" alt="">
          <span>My Profile</span>
        </a>
      </li>

     
      @if(@Auth::User()->user_status == 'admin')
      <li class="">
        <a   class="has-arrow" href="#" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/3.svg') }}" alt="">
          <span>User</span>
        </a>
        <ul>
          <li><a href="{{ route('admin.users.add') }}">Add User</a></li>
          <li><a href="{{ route('admin.users.add') }}">All User</a></li>
          
        </ul>
      </li>
      @endif
      @if(@Auth::User()->user_status == 'admin')
        <li class="">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <img src="{{ asset('user_assets/img/menu-icon/3.svg') }}" alt="">
            <span>Package</span>
          </a>
          <ul>
           
            <li><a href="{{ route('admin.packages.add') }}">Add Package</a></li>
            <li><a href="{{ route('admin.packages.view') }}">All Packages</a></li>
          </ul>
        </li>
      @endif
      <li class="">
        <a   class="has-arrow" href="{{ route('users.user_packages.view') }}" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/4.svg') }}" alt="">
          <span>My Packages</span>
        </a>
        
      </li>

      <li class="">
        <a   class="has-arrow" href="{{ route('users.user_profits.view') }}" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/5.svg') }}" alt="">
          <span>My Profit</span>
        </a>
      
      </li>

      <li class="">
        <a   class="has-arrow" href="#" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/6.svg') }}" alt="">
          <span>My Bonus</span>
        </a>
        
      </li>


      
      <li class="">
        <a   class="has-arrow" href="#" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/8.svg') }}" alt="">
          <span>Referals</span>
        </a>
      </li>

      <li class="">
        @if(@Auth::User()->user_status == 'user')
          <a   class="has-arrow" href="{{ route('users.logout') }}" id="logout_user" aria-expanded="false">
            <img src="{{ asset('user_assets/img/menu-icon/9.svg') }}" alt="">
            <span>Log Out</span>
          </a>
        @else 
          <a   class="has-arrow" href="{{ route('admin.logout') }}" id="logout_user" aria-expanded="false">
            <img src="{{ asset('user_assets/img/menu-icon/9.svg') }}" alt="">
            <span>Log Out</span>
          </a>

        @endif
       
      </li>

      {{-- <li class="">
        <a   class="has-arrow" href="#" aria-expanded="false">
          <img src="{{ asset('user_assets/img/menu-icon/3.svg') }}" alt="">
          <span>Package</span>
        </a>
        <ul>
          <li><a href="{{ route('users.user_packages.buy') }}">Buy</a></li>
          <li><a href="{{ route('users.user_packages.view') }}">View Packages</a></li>
          <li><a href="{{ route('users.user_profits.view') }}">Profit</a></li>
        </ul>
      </li> --}}


    </ul>
  
</nav>
<!-- sidebar part end -->
<!--/ sidebar  -->