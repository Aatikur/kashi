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
                <section class="tnit-catagory">
                    <div class="tnit-heading-outer tnit-spl text-center">
                        <span>Catagory</span>
                        <h2>Top Catagory</h2>
                    </div>
                    <div class="container">     
                        <div class="product-catagory">
                            <table class="table table-bordered table-responsive product-table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Catagory</th>
                                        <th>Sub Catagory</th>
                                        <th>Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cat">HDPE and MDPE Pipes</td>
                                        <td class="cat">
                                            HDPE Drinking Water Pipes
                                        </td>
                                        <td><a href="{{route('web.product.product')}}">Drinking Water Pipes</a></td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            HDPE PLB Duct Pipe
                                        </td>
                                        <td><a href="{{route('web.product.product')}}">Duct Pipe</a></td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            HDPE Drinking Water Fitting
                                        </td>
                                        <td>                                            
                                            <a href="{{route('web.product.product')}}">Elbow</a> <br>
                                            <a href="{{route('web.product.product')}}">Tee</a> <br>
                                            <a href="{{route('web.product.product')}}">Reducer</a> <br>
                                            <a href="{{route('web.product.product')}}">Saddle or D Joint</a> <br>
                                            <a href="{{route('web.product.product')}}">End Cap </a><br>
                                            <a href="{{route('web.product.product')}}">Slipon Flanges</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            MDPE Pipes
                                        </td>
                                        <td><a href="{{route('web.product.product')}}">Pipes</a></td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                        	MDPE Fittings
                                        </td>
                                        <td>
                                            <a href="{{route('web.product.product')}}">Elbow</a> <br>
                                            <a href="{{route('web.product.product')}}">Tee</a> <br>
                                            <a href="{{route('web.product.product')}}">Reducer</a> <br>
                                            <a href="{{route('web.product.product')}}">Coupler</a>
                                        </td>
                                    </tr>
                                    <tr><td colspan=3 style="padding: 1px;background: #f52b2d;border-bottom: 0;"></td></tr>
                                    <tr>
                                        <td class="cat">Agricultural Pipes and Fittings</td>
                                        <td class="cat">
                                            UPVC Cashing Pipe
                                        </td>
                                        <td><a href="{{route('web.product.product')}}">Cashing Pipe</a></td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            UPVC Cashing Pipe Fittings
                                        </td>
                                        <td>                                            
                                            <a href="{{route('web.product.product')}}">UPVC Cashing Reducer</a> <br>
                                            <a href="{{route('web.product.product')}}">UPVC Cashing Elbow</a> <br>
                                            <a href="{{route('web.product.product')}}">UPVC Cashing Tee</a> <br>
                                            <a href="{{route('web.product.product')}}">UPVC Cashing Coupler</a> <br>
                                            <a href="{{route('web.product.product')}}">UPVC END Cap</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            Column Pipes
                                        </td>
                                        <td><a href="{{route('web.product.product')}}">Column Pipe</a></td>
                                    </tr>
                                    <tr><td colspan=3 style="padding: 1px;background: #f52b2d;border-bottom: 0;"></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section><!--Video Section End-->
                
            </div><!--Main Content End-->
@endsection        
                    