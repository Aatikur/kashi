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
                                    @foreach($testimonial as  $value)
                                        <li class="tnit-event-item">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="tnit-text">
                                                       {!! $value->desc !!}
                                                        <span><i class="fa fa-map-signs" aria-hidden="true"></i> {{ $value->name }}, {{ $value->address }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!--Even Item End-->
                                    @endforeach
                                    
                                  
                                </ul><!--Event Listed End-->

                                <!--Pagination Row Start-->
                                <div class="tnit-pagination-row pd-t70">
                                    <nav aria-label="navigation">
                                        {{ $testimonial->onEachSide(3)->links() }}
                                    </nav>
                                </div><!--Pagination Row End-->

                            </div>
                        </div>
                    </div>
                </section><!--Event Section End-->          
           </div><!--Main Content End-->
@endsection        
                    