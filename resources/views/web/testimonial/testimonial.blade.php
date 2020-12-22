@extends('web.templete.master')

@section('content')        

            <!--Banner Content Start-->
            <div class="tnit-inner-banner">
                <div class="container-fluid">
                   <!--BreadCrumb Listed Start-->
                   <ul class="breadcrumb tnit-breadcrumb-holder">
                      <li class="breadcrumb-item"><a href="{{ route('web.index') }}">HOME</a></li>
                      <li class="breadcrumb-item active">Testimonial</li>
                    </ul><!--BreadCrumb Listed End-->
               </div>
            </div><!--Banner Content End-->

            <!--Main Content Start-->
            <div class="tnit-main-content">
                <!--Video Section Start-->\                    
                <section class="tnit-event-section pd-tb30">
                    <div class="tnit-heading-outer tnit-spl text-center">
                        <span>Testimonial</span>
                        <h2>Testimonial</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-xs-12 mx-auto">
                                <!--Event Listed Start-->
                                <ul class="tnit-even-listed">
                                    <!--Even Item Start-->
                                    <li class="tnit-event-item">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="tnit-text">
                                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
                                                    <span><i class="fa fa-map-signs" aria-hidden="true"></i> Alok Industry, New Delhi</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!--Even Item End-->
                                    <!--Even Item Start-->
                                    <li class="tnit-event-item">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="tnit-text">
                                                    <h4>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h4>
                                                    <span><i class="fa fa-map-signs" aria-hidden="true"></i>Quantum heights, Gaziabad </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!--Even Item End-->
                                    <!--Even Item Start-->
                                    <li class="tnit-event-item">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="tnit-text">
                                                    <h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                                                    <span><i class="fa fa-map-signs" aria-hidden="true"></i> Pankaj Sharma, Chandni Chok</span>
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
                                </div><!--Pagination Row End-->

                            </div>
                        </div>
                    </div>
                </section><!--Event Section End-->          
           </div><!--Main Content End-->
@endsection        
                    