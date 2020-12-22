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
                                        <img src="{{asset('web/images/blog-lrg-img1.jpg')}}" alt="">
                                    </div><!--Video Holder End-->
                                    <!--Video Text Start-->
                                    <div class="tnit-video-text">
                                        <h3>How To Make Better Life</h3>
                                        <ul class="tnit-meta-listed">
                                            <li>
                                                <i class="fa fa-user" aria-hidden="true"></i> <a href="#">Cynthia Fowler</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i> 12 Jun, 2017 
                                            </li>
                                        </ul>                                     
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In nec tortor id lectus tempus pretium. Mauris pulvinar lacus massa, sit amet sodales tortor scelerisque sed. Vestibulum dignissim tortor erat, at egestas dui finibus in. Maecenas a ipsum iaculis, bibendum magna ac, congue lacus. Ut a luctus nibh. Aenean in massa ipsum. Nam mattis est eu dui elementum, sit amet blandit nulla porta. Praesent ultrices lectus non gravida pellentesque. Sed id est placerat, eleifend tortor at, dignissim urna. Nunc cursus lectus at convallis ornare.</p>
                                        <p>Cras convallis sem at erat egestas posuere. Integer ac leo eget arcu lacinia sodales vitae eget nibh. Mauris rutrum enim id tellus molestie vestibulum. Nam id mi at diam aliquet sollicitudin. Nam ullamcorper arcu turpis, eu cursus nulla elementum at. Sed congue facilisis magna, vitae ornare est sodales ut. Donec libero augue, dictum tincidunt gravida vel, posuere vitae libero. Nullam hendrerit molestie eros, quis sodales orci faucibus eu. Phasellus accumsan efficitur neque. Nunc semper elit posuere tempus ullamcorper. Nullam viverra massa venenatis, fringilla ipsum at, venenatis mi. In vel maximus ex. Curabitur interdum pretium nibh quis feugiat. Mauris ultrices elementum dolor ut egestas. Cras vestibulum erat vel urna rhoncus, quis dignissim quam vehicula.</p>
                                        <p>Nullam risus metus, dictum in hendrerit non, molestie at orci. Aliquam erat volutpat. Aenean eu enim ante. Fusce quis pulvinar est, volutpat maximus leo. Maecenas elementum semper vulputate. Donec dictum, augue eu ultrices posuere, metus diam iaculis velit, a pretium nisi urna eget mi. Praesent a malesuada arcu, ut sollicitudin nisl. Fusce gravida non tellus nec lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris aliquam convallis enim, et consectetur tortor accumsan sed. Nullam id lobortis nisi. In hac habitasse platea dictumst.</p>
                                        <!--Tabs Outer Start-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section><!--Video Section End-->               
           </div><!--Main Content End-->
@endsection        
                    