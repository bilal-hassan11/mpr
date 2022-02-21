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
                                <h3> Profile </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-right">
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Profilebox</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            
                        </div>
                        {{-- <div class="profile-cart_2">
                            <div class="images"><img src="{{ asset('user_assets/img/card.jpg') }}" alt=""></div>
                            <h1>Araaf Kling</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque nam quia commodi? Voluptates
                              tenetur autem numquam. Tempora, corrupti tenetur ex sed officia facilis eius.</p>
                            <div class="social-area">
                              <a href=""><i class="fab fa-facebook"></i></a>
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-instagram"></i></a>
                              <a href=""><i class="fab fa-linkedin"></i></a>
                              <a href=""><i class="fab fa-codepen"></i></a>
                            </div>
                          </div> --}}
                          <div>
                            <form action="{{ route('admin.users.store') }}" class="ajaxForm" method="POST">
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="user_name">User Name</label>
                                    <input type="text" class="form-control" id="user_name" placeholder="User Name Here" name="user_name" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Here" name="email" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" placeholder="********" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Phone No</label>
                                    <input type="texy" class="form-control" id="phone_no" placeholder="Phone NUmber" name="phone_no" required>
                                  </div>
                                <div class="form-group">
                                  <label for="referal_id">Referal ID</label>
                                  <input type="text" class="form-control" id="referal_id" placeholder="Referal ID Here" name="referal_id" required> 
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputState">User Status</label>
                                    <select id="user_status" class="form-control" name="user_status" required>
                                        <option value="">Select User Status</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputState" >Acount Status</label>
                                    <select id="account_status" class="form-control" name="account_status" required>
                                      <option value="">Select User Account Status</option>
                                      <option value="enable">Enable</option>
                                      <option value="disable">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                              </form>
                          </div>
 
                    </div>
                </div>


        </div>
    </div>
    @include('user.layouts.footer')
