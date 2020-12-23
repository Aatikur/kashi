@extends('web.templete.master')

@section('content')  

            <!--Banner Content Start-->
            <div class="tnit-banner">
                <!--Banner Slider Start-->
                <div id="tnit-banner-slider" class="owl-carousel">
                    <!--Banner Slider Item-->
                    <div class="slider-item">
                        <img src="web/images/slider/banner-img-01.jpg" alt="">
                        <!--Banner Slider Caption Start-->
                        <div class="banner-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="">
                                        <div class="top-text">
                                            <h2>UPVC PRESSURE</h2>
                                            <h2>PIPING SYSTEM FOR</h2>
                                            <h4 class="wi-agri"><span>AGRICULTURE<span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-7 col-xs-12 col-md-offset-6 col-sm-offset-5">
                                         <div class="banner-agri-img">
                                            <img src="web/images/slider/water.gif" alt="">
                                        </div>
                                    </div>
                                </div>
                               <!--  <img src="web/images/banner-man-img.png" alt=""> -->
                            </div>
                        </div><!--Banner Slider Caption End-->
                    </div><!--Banner Slider End-->
                    <!--Banner Slider Item-->
                    <div class="slider-item">
                        <img src="web/images/slider/banner-img-02.jpg" alt="">
                        <!--Banner Slider Caption Start-->
                        <div class="banner-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="">
                                        <div class="top-text">
                                            <h4 class="wi-agri">HDPE <span>DRINKING</span> </h4>
                                            <h2>WATER PIPES </h2>
                                            <h2>SYSTEM</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-7 col-xs-6 col-md-offset-6 col-sm-offset-5">
                                         <div class="banner-man-img">
                                            <!-- <img src="web/images/banner-man-img.png" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div><!--Banner Slider Caption End-->
                    </div><!--Banner Slider End-->
                     <!--Banner Slider Item-->
                    <div class="slider-item">
                        <img src="web/images/slider/banner-img-04.jpg" alt="">
                        <!--Banner Slider Caption Start-->
                        <div class="banner-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="">
                                        <div class="top-text">
                                            
                                            <h2>KASHI VISHWANATH</h2>
                                            <h4 class="wi-agri"> <span>GARDEN</span> PIPES </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-7 col-xs-6 col-md-offset-6 col-sm-offset-5">
                                         <div class="banner-man-img">
                                            <!-- <img src="web/images/banner-man-img.png" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div><!--Banner Slider Caption End-->
                    </div><!--Banner Slider End-->
                </div><!--Banner Slider End-->
            </div><!--Banner Content End-->

            <!--Main Content Start-->
            <div class="tnit-main-content">
                <!--About Section Start-->
                <section class="tnit-about-section">
                    <div class="container tnit-container-after">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <!--About Thumb Start-->
                                <figure class="tnit-about-video">
                                    <img src="{{asset('web/images/home-about.jpg')}}" alt="">
                                </figure><!--About Thumb End-->
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <!--About Text Start-->
                                <div class="tnit-about-text">
                                    <img src="http://localhost/kashi/public/web/images/logo.png" style="width: 80%;margin-bottom: 30px;">
                                    <p>Established in 2017, Kashi Vishwanath Pipes Private Limited has made a well-recognized name as a Manufacturer and Wholesaler of PVC Pipes, CPVC Pipe, UPVC Pipes, MDPE Pipe, HDPE Pipes, Arsenic Removal Plant, Brass Bib Tap and many more. Our claim to success is hallmarked by the offered quality products that gained us huge recognizance. We are working towards development through a determined team of people to meet the most stringent requirements of customers and become leaders of tomorrow.</p>
                                </div><!--About Text End-->
                            </div>
                        </div>
                    </div>
                </section><!--About Section End-->

                <!--Video Section Start-->
                <section class="tnit-catagory pd-tb70">
                    <div class="tnit-heading-outer tnit-spl text-center">
                        <span>Catagory</span>
                        <h2>Top Catagory</h2>
                    </div>
                    <div class="container">           
                        <div class="row">
                            <div class="col-md-5 col-xs-12 no-padding">
                                <div class="catagory-block text-center">
                                   <div class="img-block"> <img src="web/images/catagories/1.jpg" alt=""></div>
                                    <h4>HDPE and MDPE Pipes</h4>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12 no-padding">
                                <div class="catagory-block text-center">
                                   <div class="img-block"> <img src="web/images/catagories/2.jpg" alt=""></div>
                                    <h4>Agricultural Pipes and Fittings</h4> 
                                </div>                              
                            </div>
                            <div class="col-md-7 col-xs-12 no-padding">
                                <div class="catagory-block text-center">
                                    <div class="img-block"><img src="web/images/catagories/3.jpg" alt=""></div>
                                    <h4>Plumbing and Sanitation Pipes and Fittings</h4> 
                                </div>                              
                            </div>
                            <div class="col-md-5 col-xs-12 no-padding">
                                <div class="catagory-block text-center">
                                   <div class="img-block"> <img src="web/images/catagories/4.jpg" alt=""></div>
                                    <h4>Garden Pipe</h4>  
                                </div>                              
                            </div>
                        </div>
                    </div>
                </section><!--Video Section End-->

                <!--Blog Section Start-->
                <section class="tnit-blog-section">
                    <!--Blog Slider Start-->
                    <div id="tnit-blog-slider" class="owl-carousel">
                        <!--Owl Item Start-->
                        <div class="item">
                            <!--Blog Item Start-->
                            <div class="tnit-blog-item">
                                <img src="web/images/home-banner1.jpg" class="img-responsive" alt="">
                            </div><!--Blog Item End-->
                        </div><!--Owl Item End-->
                        <!--Owl Item Start-->
                        <div class="item">
                            <!--Blog Item Start-->
                            <div class="tnit-blog-item">
                                <img src="web/images/home-banner2.jpg" class="img-responsive" alt="">
                            </div><!--Blog Item End-->
                        </div><!--Owl Item End-->
                    </div><!--Blog Slider End-->
                </section><!--Blog Section End-->
                
            </div><!--Main Content End-->

            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15726.257483148234!2d77.23035731724795!3d28.611004203833254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1606377801648!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;width: 100%;margin-bottom: -6px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
@endsection
                    