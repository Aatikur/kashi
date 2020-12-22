@extends('web.templete.master')

@section('content')        

            <!--Banner Content Start-->
            <div class="tnit-inner-banner">
                <div class="container-fluid">
                   <!--BreadCrumb Listed Start-->
                   <ul class="breadcrumb tnit-breadcrumb-holder">
                      <li class="breadcrumb-item"><a href="{{ route('web.index') }}">HOME</a></li>
                      <li class="breadcrumb-item active">Blog</li>
                    </ul><!--BreadCrumb Listed End-->
               </div>
            </div><!--Banner Content End-->

            <!--Main Content Start-->
            <div class="tnit-main-content">
                <!--Video Section Start-->
                <section class="tnit-blog-section tnit-blog-section_v2 pd-tb30">
                    <div class="tnit-heading-outer tnit-spl text-center">
                        <span>Blog</span>
                        <h2>Blog</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!--Inner Video Outer Start-->
                                <div class="tnit-video-inner-outer tnit-blog-inner-outer">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <!--Blog Item Start-->
                                            <div class="tnit-blog-item tnit-blog-item_v2">
                                                <div class="row">
                                                    <div class="col-12 col-xs-12">
                                                        <!--Blog Thumb Start-->
                                                        <figure class="tnit-thumb">
                                                            <img src="{{asset('web/images/blog/blog1.jpg')}}" alt="">
                                                            <figcaption class="tnit-caption">
                                                                <div class="date-box">
                                                                    <span>27</span>
                                                                    Jun
                                                                </div>
                                                            </figcaption>
                                                        </figure><!--Blog Thumb End-->
                                                    </div>
                                                    <div class="col-12 col-xs-12">
                                                        <!--Blog Text Start-->
                                                        <div class="tnit-text">
                                                            <h4><a href="blog-detail.html">3 Qualities More Valuable Than a High IQ</a></h4>
                                                            <!--Meta Listed Start-->
                                                            <ul class="tnit-meta-listed tnit-meta-listed2">
                                                                <li>By Mark </li>
                                                            </ul><!--Meta Listed End-->
                                                            <p>Ut vestibulum massa ut orci ullamcorper suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus arcu nisl, lacinia non eros nec, pellentesque sodales libero. </p>
                                                            <a href="blog-detail.html" class="tnit-btn-style1">View More</a>
                                                        </div><!--Blog Text End-->
                                                    </div>
                                                </div>
                                            </div><!--Blog Item End-->
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <!--Blog Item Start-->
                                            <div class="tnit-blog-item tnit-blog-item_v2 tnit-hove-none">
                                                <div class="row">
                                                    <div class="col-md-12 col-xs-12">
                                                        <!--Blog Thumb Start-->
                                                        <figure class="tnit-thumb">
                                                            <img src="{{asset('web/images/blog/blog2.jpg')}}" alt="">
                                                            <figcaption class="tnit-caption">
                                                                <div class="date-box">
                                                                    <span>27</span>
                                                                    Jun
                                                                </div>
                                                                
                                                            </figcaption>
                                                        </figure><!--Blog Thumb End-->
                                                    </div>
                                                    <div class="col-md-12 col-xs-12">
                                                        <!--Blog Text Start-->
                                                        <div class="tnit-text">
                                                            <h4><a href="blog-detail.html">3 Qualities More Valuable Than a High IQ</a></h4>
                                                            <!--Meta Listed Start-->
                                                            <ul class="tnit-meta-listed tnit-meta-listed2">
                                                                <li>By Mark </li>
                                                            </ul><!--Meta Listed End-->
                                                            <p>Ut vestibulum massa ut orci ullamcorper suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus arcu nisl, lacinia non eros nec, pellentesque sodales libero. </p>
                                                            <a href="blog-detail.html" class="tnit-btn-style1">View More</a>
                                                        </div><!--Blog Text End-->
                                                    </div>
                                                </div>
                                            </div><!--Blog Item End-->
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <!--Blog Item Start-->
                                            <div class="tnit-blog-item tnit-blog-item_v2 tnit-hove-none">
                                                <div class="row">
                                                    <div class="col-md-12 col-xs-12">
                                                        <!--Blog Thumb Start-->
                                                        <figure class="tnit-thumb">
                                                            <img src="{{asset('web/images/blog/blog3.jpg')}}" alt="">
                                                            <figcaption class="tnit-caption">
                                                                <div class="date-box">
                                                                    <span>27</span>
                                                                    Jun
                                                                </div>
                                                                
                                                            </figcaption>
                                                        </figure><!--Blog Thumb End-->
                                                    </div>
                                                    <div class="col-md-12 col-xs-12">
                                                        <!--Blog Text Start-->
                                                        <div class="tnit-text">
                                                            <h4><a href="blog-detail.html">3 Qualities More Valuable Than a High IQ</a></h4>
                                                            <!--Meta Listed Start-->
                                                            <ul class="tnit-meta-listed tnit-meta-listed2">
                                                                <li>By Mark </li>
                                                            </ul><!--Meta Listed End-->
                                                            <p>Ut vestibulum massa ut orci ullamcorper suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus arcu nisl, lacinia non eros nec, pellentesque sodales libero. </p>
                                                            <a href="blog-detail.html" class="tnit-btn-style1">View More</a>
                                                        </div><!--Blog Text End-->
                                                    </div>
                                                </div>
                                            </div><!--Blog Item End-->
                                        </div>
                                    </div>
                                    <!--Pagination Row Start-->
                                    <div class="tnit-pagination-row">
                                        <nav aria-label="navigation">
                                            <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            </a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                            </li>
                                            </ul>
                                        </nav>
                                    </div><!--Pagination Row End-->
                                </div><!--Inner Video Outer End-->

                            </div>
                        </div>
                    </div>
                </section><!--Video Section End-->               
           </div><!--Main Content End-->
@endsection        
                    