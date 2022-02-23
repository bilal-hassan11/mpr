
@include('user.layouts.sidebar')


<section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <hr>
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
                                    <h3>Dashboard</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-right">
                                    <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Home </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="white_box mb_30">
                        <div class="box_header">
                            <div class="main-title">
                                <h3 class="mb_25" >Monthly and yearly Profit Of {{ date('Y') }}</h3>
                            </div>

                        </div>
                        <div id="line-column-chart"></div>
                        <div class="card_footer_white">
                            <div class="row">

                                <div class="col-sm-4 text-center">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="mb-2 text-muted text-truncate"><i class="fas fa-circle text-primary mr-2 font-size-10 mr-1"></i> This Month Profit :</p>
                                        <div class="d-inline-flex align-items-center">
                                            <h5 class="mb-0 mr-2">{{ $this_month_profit->sum('profit_amount') }}</h5>
                                            <div class="text-success">
                                                {{-- <i class="fas fa-caret-up font-size-14 line-height-2 mr-2"> </i>2.1 % --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="mb-2 text-muted text-truncate"><i class="fas fa-circle text-primary mr-2 font-size-10 mr-1"></i> This Year Profit :</p>
                                        <div class="d-inline-flex align-items-center">
                                            <h5 class="mb-0 mr-2">{{ $this_year_profit->sum('profit_amount') }}</h5>
                                            <div class="text-success">
                                                {{-- <i class="fas fa-caret-up font-size-14 line-height-2 mr-2"> </i>2.1 % --}}
                                            </div>
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
                            <h3 class="green_color" ><span class="counter green_color ">{{ $user_packages->count() }}</span> + </h3>
                            <p>Total Packages</p>
                        </div>
                        {{-- <div class="single_list_counter">
                            <h3 class="green_color" ><span class=" ">{{ $user_profit->sum('profit_amount') }}</span> + </h3>
                            <p>Total Packages</p>
                        </div> --}}
                        <div class="single_list_counter">
                            <h3 class="blue_color"><span class="counter blue_color">{{ $user_profit->sum('profit_amount') }}</span> + </h3>
                            <p>Total Profit</p>
                        </div>
                        {{-- <div class="single_list_counter">
                            <h3 class="deep_blue"><span class="counter deep_blue">20</span> + </h3>
                            <p>Claimed Listing</p>
                        </div>
                        <div class="single_list_counter">
                            <h3 class="red_color"><span class="counter red_color">10</span> + </h3>
                            <p>Reported Listing </p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="white_box QA_section card_height_100">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">User Packages</h3>
                            </div>
                        </div>
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active2">
                                <thead>
                                    <tr>
                                        <th scope="col">Package Name</th>
                                        <th scope="col">Investment Amount</th>
                                        <th scope="col">Package Buying Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_packages AS $package)
                                        <tr>
                                            <td>{{ $package->parentPackage->package_title }}</td>
                                            <td>{{ $package->investment_amount }}</td>
                                            <td>{{ date('d-M-Y',strtotime($package->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
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
                </div> --}}
                
            </div>
        </div>
    </div>

    @include('user.layouts.footer')