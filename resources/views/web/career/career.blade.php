@extends('web.templete.master')

@section('content')        

            <!--Banner Content Start-->
            <div class="tnit-inner-banner">
                <div class="container-fluid">
                   <!--BreadCrumb Listed Start-->
                   <ul class="breadcrumb tnit-breadcrumb-holder">
                    <li class="breadcrumb-item"><a href="{{ route('web.index') }}">HOME</a></li>
                      <li class="breadcrumb-item active">Career</li>
                    </ul><!--BreadCrumb Listed End-->
               </div>
            </div><!--Banner Content End-->

            <!--Main Content Start-->
            <div class="tnit-main-content">
                <!--Event Section Start-->
                <section class="tnit-event-section pd-tb30">
                    <div class="tnit-heading-outer tnit-spl text-center">
                        <span>Career</span>
                        <h2>Career</h2>
                    </div>
                    <div class="container">
                        <div class="row career">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!--Sidebar Outer Start-->
                                <aside class="tnit-sidebar-outer">
                                    <!--Widget Start-->
                                    <div class="widget widget-categories">
                                        <h3>Upload CV</h3>
                                        <form method="get" class="tl-review-form tnit-proceed-form">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Name <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="text">
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Phone <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="tel">
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Email address <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="email">
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Designation <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <select name="address">
                                                          <option value="country">USA</option>
                                                          <option value="country">UK</option>
                                                          <option value="country">UI</option>
                                                        </select>
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Upload CV <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="file">
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <button class="btn-proceed" type="submit">Submit</button>
                                                    </div><!--Inner Holder End-->
                                                </div>
                                            </div>
                                        </form>
                                    </div><!--Widget End-->
                                </aside><!--Sidebar Outer End-->
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">

                                <!--Event Listed Start-->
                                @foreach($career as $data)
                                    <ul class="tnit-even-listed">
                                        <!--Even Item Start-->
                                        <li class="tnit-event-item">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="date-box">
                                                        <span>27</span>
                                                        Jun
                                                    </div>
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-xs-12">
                                                    <div class="tnit-text">
                                                        <h4 style="font-weight: 700">{{ $data->designation }}</h4>
                                                        <div class="career-sub-text">
                                                            <h5>Roles & Responsibility</h5>
                                                            <ul>
                                                               {!! $data->role !!}
                                                            </ul>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!--Even Item End-->
                                    </ul><!--Event Listed End-->
                                @endforeach

                                <!--Event Listed Start-->
                                {{-- <ul class="tnit-even-listed">
                                    <!--Even Item Start-->
                                    <li class="tnit-event-item">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <div class="date-box">
                                                    <span>27</span>
                                                    Jun
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-12">
                                                <div class="tnit-text">
                                                    <h4 style="font-weight: 700">Line Supervisor</h4>
                                                    <div class="career-sub-text">
                                                        <h5>Roles & Responsibility</h5>
                                                        <ul>
                                                            <li> Manage the recruitment and selection process.</li>
                                                            <li>Support current and future business needs through the development, engagement, motivation and preservation of human capital.</li>     
                                                        </ul>
                                                    </div>
                                                    <div class="career-sub-text">
                                                        <h5>Education</h5>
                                                        <ul>
                                                            <li>10+2 or equivalent </li>  
                                                        </ul>
                                                    </div>
                                                    <div class="career-sub-text">
                                                        <h5>Work Experience</h5>
                                                        <ul>
                                                            <li>1-3 years experience</li> 
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!--Even Item End-->
                                </ul><!--Event Listed End-->

                                <!--Pagination Row Start-->
                                <div class="tnit-pagination-row pd-t70">
                                    <nav aria-label="navigation">
                                        <ul class="pagination">
                                        <li class="page-item active"><a class="page-link" href="#">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </ul>
                                    </nav>
                                </div><!--Pagination Row End--> --}}

                            </div>
                        </div>
                    </div>
                </section><!--Event Section End-->                        
            </div><!--Main Content End-->
@endsection        
                    