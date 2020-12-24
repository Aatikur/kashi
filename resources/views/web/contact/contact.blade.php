@extends('web.templete.master')

@section('content')        

            <!--Banner Content Start-->
            <div class="tnit-inner-banner">
                <div class="container-fluid">
                   <!--BreadCrumb Listed Start-->
                   <ul class="breadcrumb tnit-breadcrumb-holder">
                      <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                      <li class="breadcrumb-item active">Product</li>
                    </ul><!--BreadCrumb Listed End-->
               </div>
            </div><!--Banner Content End-->

            <!--Main Content Start-->
            <div class="tnit-main-content">
                <!--Video Section Start-->
                <section class="tnit-contact-section pd-tb30">
                    <div class="tnit-heading-outer tnit-spl text-center">
                        <span>Contact</span>
                        <h2>Contact</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Sidebar Outer Start-->
                                <aside class="tnit-sidebar-outer tnit-sidebar-outer_v2">
                                <div class="widget widget-contact">
                                    <h3>Contact Details</h3>
                                    <ul class="about-info-listed about-info-listed_v2">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            103, Janak Palace, Manglam Enclave, RPS more Bailey Road, Patna- 801503.
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <a href="tel:+91 80489 24086">+91 80489 24086</a>
                                            <a href="tel:+91 74850 67263">+91 74850 67263</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:kashivishwanathpipe@gmail.com"><span>&nbsp;kashivishwanathpipe@gmail.com</span></a>
                                        </li>
                                    </ul>
                                </div>
                                </aside>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <!--Leave Review Outer Start-->
                                <div class="tl-review-outer">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger" >{{ Session::get('error') }}</div>
                                    @endif
                                    <h3>Leave A Message</h3>
                                    <!--Review Form Start-->
                                    <form method="post" class="tl-review-form" action="{{ route('web.add_contact') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--Inner Holder Start-->
                                                <div class="inner-holder">
                                                    <label>Full Name <i class="fa fa-star" aria-hidden="true"></i></label>
                                                    <input type="text" name="name">
                                                    @if($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong style="color:red;font-weight:500">{{ $errors->first('name') }}</strong>
                                                        </span> 
                                                    @enderror
                                                </div><!--Inner Holder End-->
                                                
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--Inner Holder Start-->
                                                <div class="inner-holder">
                                                    <label>Email <i class="fa fa-star" aria-hidden="true"></i></label>
                                                    <input type="email" name="email">
                                                    @if($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong style="color:red;font-weight:500">{{ $errors->first('email') }}</strong>
                                                        </span> 
                                                    @enderror
                                                </div><!--Inner Holder End-->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--Inner Holder Start-->
                                                <div class="inner-holder">
                                                    <label>Phone </label>
                                                    <input type="tel" name="phone">
                                                    @if($errors->has('phone'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong style="color:red;font-weight:500">{{ $errors->first('phone') }}</strong>
                                                        </span> 
                                                    @enderror
                                                </div><!--Inner Holder End-->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--Inner Holder Start-->
                                                <div class="inner-holder">
                                                    <label>Subject <i class="fa fa-star" aria-hidden="true"></i></label>
                                                    <input type="text" name="message" name="subject">
                                                    @if($errors->has('subject'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong style="color:red;font-weight:500">{{ $errors->first('subject') }}</strong>
                                                        </span> 
                                                    @enderror
                                                </div><!--Inner Holder End-->
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <!--Inner Holder Start-->
                                                <div class="inner-holder">
                                                    <label>Message </label>
                                                    <textarea name="message"></textarea>
                                                    @if($errors->has('message'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong style="color:red;font-weight:500">{{ $errors->first('message') }}</strong>
                                                        </span> 
                                                    @enderror
                                                </div><!--Inner Holder End-->
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!--Inner Holder Start-->
                                            <div class="inner-holder">
                                                <button class="btn-submit" type="submit">Submit</button>
                                            </div><!--Inner Holder End-->
                                            </div>
                                        </div>
                                    </form><!--Review Form End-->
                                </div><!--Leave Review Outer End-->
                            </div>
                        </div>
                    </div>
                </section><!--Video Section End-->
                
            </div><!--Main Content End-->
@endsection        
                    