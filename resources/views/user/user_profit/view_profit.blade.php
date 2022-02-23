@include('user.layouts.sidebar')


<section class="main_content dashboard_part">
    <hr>
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3> User Profit</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-right">
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> View Profts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>User Package Profit  List</h4>
                            {{-- <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ml-10">
                                    <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                                </div>
                            </div> --}}
                        </div>

                        <div class="QA_table mb_30">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Package Name</th>
                                        <th scope="col">Investment Amount</th>
                                        <th scope="col">Profit Amount</th>
                                        <th scope="col">Profit %</th>
                                        <th scope="col">Profit Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_package AS $key=>$profit)
                                    <tr>
                                        <th scope="row"> <a href="#" class="question_content">{{ $key+1 }}</a></th>
                                        
                                        
                                        @foreach($profit->childProfit AS $child)
                                            <td>{{ $profit->parentPackage->package_title }}</td>
                                            <td>{{ $profit->investment_amount }}</td>
                                            <td>{{ $child->profit_amount }}</td>
                                            <td>{{ $child->profit_percentage }}</td>
                                            <td>{{ date('d-M-Y',strtotime($child->profit_date)) }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.layouts.footer')