@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
     <!-- top tiles -->
     <div class="row tile_count">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total Products</span>
        <div class="count green">{{ $products }}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total Product Inquiry</span>
        <div class="count green">{{ $inquiry }}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total Category</span>
        <div class="count green">{{ $category }}</div>
      </div>
     
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
          <span class="count_top"><i class="fa fa-user"></i> Total SubCategory</span>
          <div class="count green">{{ $subcategory }}</div>
      </div>
     
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total Blog Post</span>
        <div class="count green">{{ $blog }}</div>
      </div>
      
    </div> 
    <!-- /top tiles -->

  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Inquiry List</h2>
            <div class="clearfix"></div>
        </div>
        <div>
          <div class="x_content">
            <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Product Name</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Phone</th>
                    
                </tr>
              </thead>
              <tbody class="form-text-element">
                  @if(isset($inquiry_data) && !empty($inquiry_data))
                    @php
                        $count = 1;
                    @endphp
                    @foreach($inquiry_data as $inquirys)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$inquirys->product->name}}</td>
                        <td>{{$inquirys->name}}</td>
                        <td>{{ $inquirys->city }}</td>
                        <td>{{ $inquirys->phone }}</td>
                        
                    </tr>
                    @endforeach
                  @else
                    <tr>
                        <td colspan="6" class="text-center">No Inquiry Found</td>
                    </tr>
                  @endif
              </tbody>
            </table>
            <a href="{{ route('admin.inquiry_list') }}" class="btn btn-primary pull-right">Show More...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection
