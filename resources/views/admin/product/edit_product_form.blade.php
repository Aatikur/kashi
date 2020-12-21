@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
    	{{-- <div class="col-md-2"></div> --}}
    	<div class="col-md-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
    	            <h2>Update Product</h2>
    	            <div class="clearfix"></div>
    	        </div>
                <div>
                     @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif

                </div>
    	        <div>
    	            <div class="x_content">
    	           
    	            	{{ Form::open(['method' => 'put','route'=>['admin.update_product','id'=>$product_details->id] ,'enctype'=>'multipart/form-data']) }}
    	            	
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                  <label for="name">Product name <span><b style="color: red"> * </b></span></label>
                                  <input type="text" class="form-control" name="name"  value="{{ $product_details->name }}" placeholder="Enter Product name" required>
                                    @if($errors->has('name'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="category">Select Category <span><b style="color: red"> * </b></span></label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option value="">Select Category</option>
                                        @if(isset($category) && !empty($category))
                                            @foreach($category as $cat)
                                                <option value="{{ $cat->id }}" {{ $cat->id == $product_details->cat_id?'selected':'' }}>{{ $cat->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if($errors->has('category'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @enderror
                                </div>                     
                            </div>

                            <div class="form-row mb-3">                                
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="sub_category">Select Sub Category <span><b style="color: red"> * </b></span></label>
                                    <select class="form-control" name="sub_category" id="sub_category" required>
                                      <option value="">Select First Category</option>
                                    </select>
                                    @if($errors->has('sub_category'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('sub_category') }}</strong>
                                        </span>
                                    @enderror
                                </div>                         
                            </div>
                            
                                                   
                        </div>
                        <div class="well" style="overflow: auto" id="size_div">
                            <div class="form-row mb-3">                                
                                
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="mrp">Enter M.R.P. <span><b style="color: red"> * </b></span></label>
                                    <input type="number" step="any" class="form-control" name="mrp"  value="{{ $product_details->mrp }}" placeholder="Enter MRP" required>
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="price">Enter Price <span><b style="color: red"> * </b></span></label>
                                    <input type="number" step="any" class="form-control" name="price"  value="{{ $product_details->price }}" placeholder="Enter Price" required>
                                </div>
                              
                            </div>
                        </div>
                        <div class="well" style="overflow:auto">
                            <div class="well" style="overflow: auto" id="image_div">
                                <div class="form-row mb-10">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="size">Images <span><b style="color: red"> * </b></span></label>
                                        <input type="file" name="product_image" class="form-control" >
                                        @if($errors->has('images'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('images') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <label for="short_description">Type Short Product Descrition</label>
                                    <textarea class="form-control" name="short_description" id="short_description">{{ $product_details->short_desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <label for="description">Type Long Product Descrition</label>
                                    <textarea class="form-control" name="description" id="description">{{ $product_details->long_desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">    	            	
                        {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}  
    	            	</div>
    	            	{{ Form::close() }}

    	            </div>
    	        </div>
    	    </div>
    	</div>
    	{{-- <div class="col-md-2"></div> --}}
    </div>
</div>


 @endsection

  @section('script')

  <script src="{{ asset('admin/ckeditor4/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description', {
            height: 200,
        });
        
        
        $(document).ready(function(){
            $("#category").change(function(){
                var category = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url:"{{ url('/admin/retrive/sub/category/')}}"+"/"+category+"",
                    success:function(data){
                        if ($.isEmptyObject(data)) {
                            $("#sub_category").html("<option value=''>No Sub Category Found</option>");
                        } else {
                            $("#sub_category").html("<option value=''>Please Select First Category</option>");
                            $.each( data, function( key, value ) {
                                $("#sub_category").append("<option value='"+value.id+"'>"+value.name+"</option>");
                            });                          
                        }
                        

                    }
                });
            });

         
        });



    </script>
 @endsection


        
    