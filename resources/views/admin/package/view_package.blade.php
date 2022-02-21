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
                                      <p>Neurologist </p>
                                      <h5>Dr. Robar Smith</h5>
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
        <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3> {{ @$title }} </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-right">
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i>{{ @$page_title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            
                        </div>
                          <div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">Min Inv Amount</th>
                                    <th scope="col">max Inv Amount</th>
                                    <th scope="col">Commission</th>
                                    <th scope="col">Activation</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($packages AS $key=>$package)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $package->package_title }}</td>
                                            <td>{{ $package->min_investment_amount }}</td>
                                            <td>{{ $package->max_investment_amount }}</td>
                                            <td>{{ $package->comission_level }}</td> 
                                            <td>{{ $package->activation_charges }}</td>
                                            <td>
                                                @if($package->status == 'active')
                                                    <span class="status_btn">Active</span>
                                                @else
                                                    <span class="status_btn bg-danger">Deactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @if($package->status == 'active')
                                                            <a class="dropdown-item nopopup" href="#" onclick="ajaxRequest(this)" data-url="{{ route('admin.packages.status.update',['id'=>base64_encode($package->id),'status'=>'deactive']) }}">Deactive</a>
                                                        @else 
                                                            <a class="dropdown-item nopopup" href="#" onclick="ajaxRequest(this)" data-url="{{ route('admin.packages.status.update',['id'=>base64_encode($package->id),'status'=>'active']) }}">Active</a>
                                                        @endif
                                                      <a class="dropdown-item" href="{{ route('admin.packages.edit',['id'=>base64_encode($package->id)]) }}">Edit</a>
                                                      <a class="dropdown-item" href="#" onclick="ajaxRequest(this)" data-url="{{ route('admin.packages.delete',['id'=>base64_encode($package->id)]) }}" >Delete</a>
                                                    </div>
                                                  </div>
                                            </td>  
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                          </div>
 
                    </div>
                </div>


        </div>
    </div>
    @include('user.layouts.footer')
