@extends('web.templete.master')

@section('content')       

            <!--Banner Content Start-->
            <div class="tnit-inner-banner">
                <div class="container-fluid">
                   <!--BreadCrumb Listed Start-->
                   <ul class="breadcrumb tnit-breadcrumb-holder">
                      <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                      <li class="breadcrumb-item active">About Me</li>
                    </ul><!--BreadCrumb Listed End-->
               </div>
            </div><!--Banner Content End-->

             <!--Main Content Start-->
             <div class="tnit-main-content">
                 <!--Video Section Start-->
                <section class="tnit-product-section pd-tb70">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!--Product Info Start-->
                                <div class="tnit-pro-info-outer">
                                    <!--Product Item Start-->
                                    <div class="tnit-product-item tnit-product-detail-item">
                                        <figure class="tnit-thumb">
                                            <img src="{{ asset('images/products/'.$product->image)}}" alt="">
                                        </figure>
                                        <div class="tnit-text-outer">
                                            <h3><a href="product-detail.html">{{ $product->name }}</a></h3>
                                            <span class="small">{{ $product->category->name }}</span>
                                            <div class="bottom-text">
                                                <div class="left">
                                                    <span>{{ $product->subcategory->name }}</span>
                                                </div>
                                                <div class="right">
                                                    <em>₹{{ $product->mrp}}</em>
                                                    <span class="free">₹{{ $product->price}}</span>
                                                </div>
                                            </div>
                                            <p style="margin-bottom:0">{!! $product->short_desc !!}</a>
                                            <div class="bottom-holder2" style="margin-top:20px">
                                                <button class="pro-btn-cart" data-toggle="modal" data-target="#tnit-modal"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Ask for Quote</button>
                                                <!--Popup Overlay Outer Start-->
                                                <div class="tnit-popup-outer">
                                                    <!-- Modal Box Start-->
                                                    <div class="modal fade tnit-modal-outer" id="tnit-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="top">
                                                                        <h3 clas="text-center mb-0" style="margin-bottom:0;color: #fd0002;">Ask for Quote</h3>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!--Modal Form Start-->
                                                                    <p>Provide us your contact detail and our sales team will get in touch with you within 24 hrs</p>
                                                                    <form method="post" class="tnit-modal-form" action="{{ route('web.inquiry',['id'=>$product->id]) }}">
                                                                        @csrf
                                                                        @method('put')
                                                                        <div class="inner-holder">
                                                                            <label>Name</label>
                                                                            <input type="text" name="name" style="color:#333">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="inner-holder">
                                                                                    <label>Phone</label>
                                                                                    <input type="text" name="phone" style="color:#333">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="inner-holder">
                                                                                    <label>Location</label>
                                                                                    <input type="text" name="city" style="color:#333">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="inner-holder">
                                                                            <button class="btn-register" type="submit">Send</button>
                                                                        </div>
                                                                    </form><!--Modal Form End-->
                                                                </div>                                                            
                                                            </div>
                                                        </div>
                                                    </div><!-- Modal Box End-->
                                                </div><!--Popup Overlay Outer End-->                                            
                                            </div>                                            
                                        </div>
                                    </div><!--Product Item End-->
                                </div><!--Product Info End-->
                                <!--Inner Video Outer Start-->
                                <div class="tnit-product-inner-outer">
                                     <!--Tabs Outer Start-->
                                    <div class="tl-tabs-outer">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs">
                                             <li role="presentation" class="active"><a href="#tl-tab-list1" aria-controls="tl-tab-list1" role="tab" data-toggle="tab">Description</a></li>
                                        </ul><!-- Nav tabs End-->

                                        <!-- Tab Content Start -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="tl-tab-list1">
                                                <!--Leave Review Outer Start-->
                                                <div class="tl-review-outer">
                                                   <p>{!! $product->long_desc !!}</p>
                                                </div><!--Leave Review Outer End-->
                                            </div>
                                        </div><!-- Tab Content End -->
                                    </div><!--Tabs Outer End-->
                                    <!--Heading Outer start-->
                                    @if(isset($related_products) && !empty($related_products) && count($related_products)>0)
                                        <div class="tnit-heading-outer">
                                            <h3>Related Products</h3>
                                        </div><!--Heading Outer End-->
                                        @foreach($related_products as $values)
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <!--Video Item Start-->
                                                    <div class="tnit-product-item">
                                                        <figure class="tnit-thumb">
                                                            <img src="{{ asset('images/products/'.$values->image)}}" alt="">
                                                            <figcaption class="tnit-caption">
                                                                <span class="btn-sale">Sale!</span>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="tnit-text-outer">
                                                            <span class="small">{{ $values->category->name }}</span>
                                                            <h4><a href="{{ route('web.product.product',['id'=>$values->id]) }}">{{ $values->name }}</a></h4>
                                                            <div class="bottom-text">
                                                                <div class="left">
                                                                   
                                                                    
                                                                </div>
                                                                <div class="right">
                                                                    <em>{{ $values->mrp }}</em>
                                                                    <span class="free">{{ $values->price }}</span>
                                                                </div>
                                                            </div>
                                                            <a href="{{ route('web.product.product',['id'=>$values->id]) }}" style="font-size: 14px;font-weight: 600;padding: 0;border: none;display: block;color: #fd0002;text-align: center;" ><i class="fa fa-eye" aria-hidden="true"></i> View Product</a>
                                                        </div>
                                                    </div><!--Video Item End-->
                                                </div>
                                                
                                            </div>
                                        @endforeach
                                    @endif
                                </div><!--Inner Video Outer End--> 
                            </div>
                        </div>
                    </div>
                </section><!--Video Section End-->
                
            </div><!--Main Content End-->

@endsection   
                    