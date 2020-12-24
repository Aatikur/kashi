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
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-1 col-xs-12">
                                <!--Blog Item Start-->
                                <div class="tnit-blog-item tnit-blog-detail-inner">
                                
                                    <!--Video Holder Start-->
                                    <div class="tnit-thumb">
                                        <img src="{{asset('admin/post/'.$single_post->image)}}" alt="">
                                    </div><!--Video Holder End-->
                                    <!--Video Text Start-->
                                    <div class="tnit-video-text">
                                        <h3>{{ $single_post->title }}</h3>
                                        <ul class="tnit-meta-listed">
                                            {{-- <li>
                                                <i class="fa fa-user" aria-hidden="true"></i> <a href="#">Cynthia Fowler</a>
                                            </li> --}}
                                            <li>
                                                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>  {{ date_format($single_post->created_at, 'M m, Y') }}
                                            </li>
                                        </ul>                                     
                                        {!! $single_post->body !!}
                                        <!--Tabs Outer Start-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section><!--Video Section End-->               
           </div><!--Main Content End-->
@endsection        
                    