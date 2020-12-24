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
                                        @if (Session::has('message'))
                                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                                        @endif
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                        @endif
                                        <h3>Upload CV</h3>
                                        <form method="post" class="tl-review-form tnit-proceed-form" action="{{ route('web.add_cv') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Name <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="text" name="full_name">
                                                        @if($errors->has('full_name'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('full_name') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Phone <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="tel" name="phone">
                                                        @if($errors->has('phone'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Email address <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="email" name="email">
                                                        @if($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                        <label>Designation <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <select name="designation">
                                                            @foreach($career as $values)
                                                                <option value="{{ $values->designation }}">{{ $values->designation }}</option>
                                                            @endforeach
                                                          
                                                        </select>
                                                        @if($errors->has('designation'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('designation') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div><!--Inner Holder End-->
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!--Inner Holder Start-->
                                                    <div class="inner-holder">
                                                       
                                                        <label>Upload CV <i class="fa fa-star" aria-hidden="true"></i></label>
                                                        <input type="file" name="cv">
                                                        @if($errors->has('cv'))
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                <strong>{{ $errors->first('cv') }}</strong>
                                                            </span>
                                                        @enderror
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
                                                        <span>{{date('d M', strtotime($data->created_at))}}</span>
                                                        
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

                             

                                <!--Pagination Row Start-->
                                <div class="tnit-pagination-row pd-t70">
                                    <nav aria-label="navigation">
                                        {{ $career->onEachSide(3)->links() }}
                                    </nav>
                                </div><!--Pagination Row End--> 

                            </div>
                        </div>
                    </div>
                </section><!--Event Section End-->                        
            </div><!--Main Content End-->
@endsection        
                    