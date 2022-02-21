
@include('user.layouts.sidebar')


<section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                                <div class="search_inner">
                                    <form action="#">
                                        <div class="search_field">
                                            <input type="text" placeholder="Search here..." >
                                        </div>
                                        <button type="submit"> <img src="{{ asset('user_assets/img/icon/icon_search.svg') }}" alt=""> </button>
                                    </form>
                                </div>
                            </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="bell_notification_clicker" href="#"> <img src="{{ asset('user_assets/img/icon/bell.svg') }}" alt="">
                                        <span>04</span>
                                    </a>
                                    <!-- Menu_NOtification_Wrap  -->
                                <div class="Menu_NOtification_Wrap">
                                    <div class="notification_Header">
                                        <h4>Notifications</h4>
                                    </div>
                                    <div class="Notification_body">
                                        <!-- single_notify  -->
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('user_assets/img/staf/2.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Directory </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <!-- single_notify  -->
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('user_assets/img/staf/4.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Awesome packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <!-- single_notify  -->
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('user_assets/img/staf/3.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>what a packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <!-- single_notify  -->
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('user_assets/img/staf/2.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Directory </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <!-- single_notify  -->
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('user_assets/img/staf/4.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Awesome packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <!-- single_notify  -->
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('user_assets/img/staf/3.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>what a packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nofity_footer">
                                        <div class="submit_button text-center pt_20">
                                            <a href="#" class="btn_1">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Menu_NOtification_Wrap  -->
                                </li>
                                <li>
                                    <a class="CHATBOX_open" href="#"> <img src="{{ asset('user_assets/img/icon/msg.svg') }}" alt="">  <span>01</span> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="{{ asset('user_assets/img/client_img.png') }}" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>{{ @Auth::User(['user_status']) }} </p>
                                        <h5> {{ @Auth::User(['username']) }}</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3> Default Dashboard</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Online </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="white_box mb_30">
                        <div class="box_header">
                            <div class="main-title">
                                <h3 class="mb_25" >Monthly Income stats for November 2020</h3>
                            </div>
                            <div class="float-right d-none d-md-inline-block">
                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-sm btn-light">Today</button>
                                    <button type="button" class="btn btn-sm btn-light active">Weekly</button>
                                    <button type="button" class="btn btn-sm btn-light">Monthly</button>
                                </div>
                            </div>
                        </div>
                        <div id="line-column-chart"></div>
                        <div class="card_footer_white">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <div class="d-inline-flex">
                                        <h5 class="mr-2">$12,253</h5>
                                        <div class="text-success">
                                            <i class="fas fa-caret-up font-size-14 line-height-2 mr-2"> </i>2.2 %
                                        </div>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Today Income</p>
                                </div>

                                <div class="col-sm-4 text-center">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="mb-2 text-muted text-truncate"><i class="fas fa-circle text-primary mr-2 font-size-10 mr-1"></i> This Month :</p>
                                        <div class="d-inline-flex align-items-center">
                                            <h5 class="mb-0 mr-2">$ 34,254</h5>
                                            <div class="text-success">
                                                <i class="fas fa-caret-up font-size-14 line-height-2 mr-2"> </i>2.1 %
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="mb-2 text-muted text-truncate"><i class="fas fa-circle text-success font-size-10 mr-1"></i> This Year :</p>
                                        <div class="d-inline-flex align-items-center">
                                            <h5 class="mb-0">$ 32,695</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="list_counter_wrapper white_box mb_30 p-0 card_height_100">
                        <div class="single_list_counter">
                            <h3 class="green_color" ><span class="counter green_color ">50</span> + </h3>
                            <p>Today Profit</p>
                        </div>
                        <div class="single_list_counter">
                            <h3 class="blue_color"><span class="counter blue_color">100</span> + </h3>
                            <p>This Monthly Profit</p>
                        </div>
                        <div class="single_list_counter">
                            <h3 class="deep_blue"><span class="counter deep_blue">20</span> + </h3>
                            <p>Total Withdraw</p>
                        </div>
                        <div class="single_list_counter">
                            <h3 class="red_color"><span class="counter red_color">10</span> + </h3>
                            <p>Withdraw Requests</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="white_box QA_section card_height_100">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Users according to packages</h3>
                            </div>
                        </div>
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active2">
                                <thead>
                                    <tr>
                                        <th scope="col">Package name</th>
                                        <th scope="col">Total Profits </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Free package</td>
                                        <td>2556</td>
                                    </tr>
                                    <tr>
                                        <td>Free package</td>
                                        <td>2556</td>
                                    </tr>
                                    <tr>
                                        <td>Free package</td>
                                        <td>2556</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_box mb_30 card_height_100">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb_25">Overview</h3>
                            </div>
                        </div>
                        <div class="activity_progressbar">
                            <div class="single_progressbar d-flex">
                                <h6>Active Listings</h6>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="95"></span>
                                </div>
                            </div>
                            <div class="single_progressbar d-flex">
                                <h6>Claimed Listings</h6>
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="75"></span>
                                </div>
                            </div>
                            <div class="single_progressbar d-flex">
                                <h6>Reported Listings</h6>
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="55"></span>
                                </div>
                            </div>
                            <div class="single_progressbar d-flex">
                                <h6>Pending Listings</h6>
                                <div id="bar4" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="25"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    @include('user.layouts.footer')