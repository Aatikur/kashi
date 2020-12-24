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
                                        <td>
                                                @foreach($hpde_dr_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}"style="display: block;">{{  $value->name}}</a>
                                               
                                                @endforeach
                                            </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            HDPE PLB Duct Pipe
                                        </td>
                                        <td> 
                                            @foreach($hpde_plb_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            HDPE Drinking Water Fitting
                                        </td>
                                        <td>                                            
                                            @foreach($hdpe_ft_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            MDPE Pipes
                                        </td>
                                        <td> 
                                            @foreach($hdpe_mdp_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                        	MDPE Fittings
                                        </td>
                                        <td>
                                            @foreach($hdpe_cl_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr><td colspan=3 style="padding: 1px;background: #f52b2d;border-bottom: 0;"></td></tr>
                                    <tr>
                                        <td class="cat">Agricultural Pipes and Fittings</td>
                                        <td class="cat">
                                            UPVC Cashing Pipe
                                        </td>
                                        <td>
                                            @foreach($agri_upvc_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            UPVC Cashing Pipe Fittings
                                        </td>
                                        <td>                                            
                                            @foreach($agri_ft_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            Column Pipes
                                        </td>
                                        <td>
                                            @foreach($agri_col_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr><td colspan=3 style="padding: 1px;background: #f52b2d;border-bottom: 0;"></td></tr>
                                   
                                    <tr>
                                        <td class="cat">Plumbing and Sanitation Pipes and Fittings</td>
                                        <td class="cat">
                                            CPVC Pipes
                                        </td>
                                        <td>
                                            @foreach($plum_cpvc_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            CPVC Pipe Fitting
                                        </td>
                                        <td>                                            
                                            @foreach($plum_ft_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            UPVC Plumbing Pipe
                                        </td>
                                        <td>
                                            @foreach($plum_pipe_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            UPVC Plumbing Pipe Fitting
                                        </td>
                                        <td>
                                            @foreach($plum_pipe_ft_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            SWR Pipe
                                        </td>
                                        <td>
                                            @foreach($plum_swr_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cat"></td>
                                        <td class="cat">
                                            SWR Pipe Fittings
                                        </td>
                                        <td>
                                            @foreach($plum_swr_ft_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr><td colspan=3 style="padding: 1px;background: #f52b2d;border-bottom: 0;"></td></tr>
                                   
                                    <tr>
                                        <td class="cat">Garden Pipe</td>
                                        <td class="cat">
                                            Water Hose Pipe
                                        </td>
                                        <td>
                                            @foreach($garden_hose_products as $value)
                                                <a href="{{route('web.product.product',['id'=>$value->id])}}">{{  $value->name}}</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section><!--Video Section End-->
                
            </div><!--Main Content End-->
@endsection        
                    