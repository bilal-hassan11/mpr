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
                                      <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                  </form>
                              </div>
                          </div>
                      <div class="header_right d-flex justify-content-between align-items-center">
                          <div class="header_notification_warp d-flex align-items-center">
                              <li>
                                  <a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt="">
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
                                              <a href="#"><img src="img/staf/2.png" alt=""></a>
                                          </div>
                                          <div class="notify_content">
                                              <a href="#"><h5>Cool Directory </h5></a>
                                              <p>Lorem ipsum dolor sit amet</p>
                                          </div>
                                      </div>
                                      <!-- single_notify  -->
                                      <div class="single_notify d-flex align-items-center">
                                          <div class="notify_thumb">
                                              <a href="#"><img src="img/staf/4.png" alt=""></a>
                                          </div>
                                          <div class="notify_content">
                                              <a href="#"><h5>Awesome packages</h5></a>
                                              <p>Lorem ipsum dolor sit amet</p>
                                          </div>
                                      </div>
                                      <!-- single_notify  -->
                                      <div class="single_notify d-flex align-items-center">
                                          <div class="notify_thumb">
                                              <a href="#"><img src="img/staf/3.png" alt=""></a>
                                          </div>
                                          <div class="notify_content">
                                              <a href="#"><h5>what a packages</h5></a>
                                              <p>Lorem ipsum dolor sit amet</p>
                                          </div>
                                      </div>
                                      <!-- single_notify  -->
                                      <div class="single_notify d-flex align-items-center">
                                          <div class="notify_thumb">
                                              <a href="#"><img src="img/staf/2.png" alt=""></a>
                                          </div>
                                          <div class="notify_content">
                                              <a href="#"><h5>Cool Directory </h5></a>
                                              <p>Lorem ipsum dolor sit amet</p>
                                          </div>
                                      </div>
                                      <!-- single_notify  -->
                                      <div class="single_notify d-flex align-items-center">
                                          <div class="notify_thumb">
                                              <a href="#"><img src="img/staf/4.png" alt=""></a>
                                          </div>
                                          <div class="notify_content">
                                              <a href="#"><h5>Awesome packages</h5></a>
                                              <p>Lorem ipsum dolor sit amet</p>
                                          </div>
                                      </div>
                                      <!-- single_notify  -->
                                      <div class="single_notify d-flex align-items-center">
                                          <div class="notify_thumb">
                                              <a href="#"><img src="img/staf/3.png" alt=""></a>
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
                                  <a class="CHATBOX_open" href="#"> <img src="img/icon/msg.svg" alt="">  <span>01</span> </a>
                              </li>
                          </div>
                          <div class="profile_info">
                              <img src="img/client_img.png" alt="#">
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
      <div class="container-fluid p-0">
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
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Pagination</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination 1</h3>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination 2</h3>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination 2</h3>
                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination 3</h3>
                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                  2
                                  <span class="sr-only">(current)</span>
                                </span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination 3</h3>
                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg">
                              <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                  1
                                  <span class="sr-only">(current)</span>
                                </span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination 3</h3>
                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm">
                              <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                  1
                                  <span class="sr-only">(current)</span>
                                </span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination center</h3>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >pagination Right</h3>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
                
                
                



        </div>
    </div>

    @include('user.layouts.footer')