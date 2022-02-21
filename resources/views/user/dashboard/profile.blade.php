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
                <div class="col-md-6">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            
                        </div>
                        <div class="profile-cart_2">
                            <div class="images"><img src="{{ asset('user_assets/img/card.jpg') }}" alt=""></div>
                            <h1>{{ @Auth::User()->username }}</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque nam quia commodi? Voluptates
                              tenetur autem numquam. Tempora, corrupti tenetur ex sed officia facilis eius.</p>
                            <div class="social-area">
                              <a href=""><i class="fab fa-facebook"></i></a>
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-instagram"></i></a>
                              <a href=""><i class="fab fa-linkedin"></i></a>
                              <a href=""><i class="fab fa-codepen"></i></a>
                            </div>
                          </div>
 
 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                           
                        </div>
                        <div class="pCard_card">
                            <div class="pCard_up">
                            <div class="pCard_text">
                                <h2>{{ @Auth::User()->username }}</h2>
                                <p>UI/UX Designer &amp; UI Developer</p>
                            </div>
                            <div class="pCard_add"><i class="fa fa-plus"></i></div>
                            </div>
                            <div class="pCard_down">
                            <div>
                                <p>Profits</p>
                                <p>126</p>
                            </div>
                            <div>
                                <p>Referals</p>
                                <p>21,579</p>
                            </div>
                            <div>
                                <p>Plans</p>
                                <p>1,976</p>
                            </div>
                            </div>
                            <div class="pCard_back">
                            <p>See My Latest Work Here</p>
                            <a href="#"><i class="fab fa-twitter fa-2x fa-fw"></i></a>
                            <a href="#"><i class="fab fa-linkedin fa-2x fa-fw"></i></a>
                            <a href="#"><i class="fab fa-behance fa-2x fa-fw"></i></a> <br>
                            <a href="#"><i class="fab fa-codepen fa-2x fa-fw"></i></a>
                            <a href="#"><i class="fab fa-dribbble fa-2x fa-fw"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                            <p>Follow Me!</p>
                            </div>
                        </div>
 
 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                           
                        </div>
                        <div class="profile_box_1">
                            <div class="profile-cover-image">
                            <img src="{{ asset('user_assets/img/card.jpg') }}">
                            </div>
                            <div class="profile-picture">
                            <img src="{{ asset('user_assets/img/card.jpg') }}">
                            </div>
                            <div class="profile-content">
                            <h1>
                            {{ @Auth::User()->username }}
                            </h1>
                            <p>
                            Design &amp; Code
                            </p>
                            <div class="socials">
                            <a href=""><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            
                        </div>
                        
                        <div class="profile_card_5">
                            <div class="cover-photo">
                              <img src="{{ asset('user_assets/img/card.jpg') }}" class="profile">
                            </div>
                            <div class="profile-name">{{ @Auth::User()->username }}</div>
                            <p class="about">User Interface Designer and<br>front-end developer</p>
                            <button class="msg-btn">Message</button>
                            <button class="follow-btn">Edit Profile</button>
                            <div>
                              <i class="fab fa-facebook-f"></i>
                              <i class="fab fa-instagram"></i>
                              <i class="fab fa-youtube"></i>
                              <i class="fab fa-twitter"></i>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            
                        </div>
                        
                        <div class="profile-card-4">
                            <div class="profile-img">
                                <img src="{{ asset('user_assets/img/card2.jpg') }}">
                            </div>
                            <div class="profile-content">
                                <h2 class="title">{{ @Auth::User()->username }}
                                <span>Designer &amp; Developer</span>
                                </h2>
                                <ul class="social-link">
                                <li><a href="#" class="fab fa-facebook"></a></li>
                                <li><a href="#" class="fab fa-google"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    @include('user.layouts.footer')
