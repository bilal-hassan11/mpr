<!-- DEBUG-VIEW START 1 APPPATH/Config/../Views/header/header.php -->
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript"  id="debugbar_loader" data-time="1644073733" src=""></script><script type="text/javascript"  id="debugbar_dynamic_script"></script><style type="text/css"  id="debugbar_dynamic_style"></style>

	<title>{{ @$title ?? 'MPR' }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Home">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="language" content="english" />
	<link rel="alternate" href="" hreflang="en-pk" />
	<link rel="canonical" href="">
	<link rel="shortcut icon" href="{{ asset('frontend_assets/images/newLogo.jfif') }}" type="image/x-icon">



<!-- DEBUG-VIEW ENDED 1 APPPATH/Config/../Views/header/header.php -->
<!-- DEBUG-VIEW START 2 APPPATH/Config/../Views/css/allCSS.php -->
<!--<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet"  type="text/css"  href="">
<link rel="stylesheet"  type="text/css"  href="">
<link rel="stylesheet"  type="text/css"  href="">
<link rel="stylesheet"  type="text/css"  href="">
<link rel="stylesheet"  type="text/css"  href="">
<link rel="stylesheet"  type="text/css"  href="">
<link rel="stylesheet" href="">-->


<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('frontend_assets/css/main.css?version=4033') }}">
<!-- DEBUG-VIEW ENDED 2 APPPATH/Config/../Views/css/allCSS.php -->
<!-- DEBUG-VIEW START 3 APPPATH/Config/../Views/header/navbar.php -->
<div class="main--body">
    <!--========== Preloader ==========-->
    <!--<div class="preloader">
        <div class="preloader-wrapper">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>-->
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--========== Preloader ==========-->

    <!--=======Header-Section Starts Here=======-->
    @include('frontend.layouts.header')
    <!--=======Header-Section Ends Here=======-->
    <div class="floating-wpp"></div>

@yield('content')
<!--=======Check-Section Ends Here=======-->
<!-- DEBUG-VIEW ENDED 5 APPPATH/Config/../Views/content/MainHome.php -->
<!-- DEBUG-VIEW START 6 APPPATH/Config/../Views/footer/footer.php -->
<!-- ==========Footer-Section Starts Here========== -->
@include('frontend.layouts.footer')
<!-- ==========Footer-Section Ends Here========== -->


</div>

<div class="modal fade" tabindex="-1" role="dialog" id="thmModl">
	<div class="modal-dialog" role="document" id="modDialog">
		<div class="modal-content" id="modContent">
			<div class="modal-header" id="thmHead">
				<h4 class="modal-title" id="thmtitle"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body" id="thmBody">
				<img src="{{ asset('frontend_assets/images/oneYear.jpeg') }}" class="img-fluid img-responsive">
			</div>
			<div class="modal-footer" id="thmfooter">
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- footer end -->
<!-- <script type="text/javascript">
	var burl = "https://www.5stark.com";
	var surl = "https://www.5stark.com/";
	var curl = "https://www.5stark.com/";
</script> -->

<script src="{{ asset('frontend_assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/viewport.jquery.js') }}"></script>
<script src="{{ asset('frontend_assets/js/nice-select.js') }}"></script>
<script src="{{ asset('frontend_assets/js/owl.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/paroller.js') }}"></script>
<script src="{{ asset('frontend_assets/js/main.js') }}"></script>
<script src="{{ asset('frontend_assets/js/custom.js?version=303') }}"  type="text/javascript"></script>
</body>

</html>

<!-- DEBUG-VIEW ENDED 7 APPPATH/Config/../Views/footer/endfooter.php -->