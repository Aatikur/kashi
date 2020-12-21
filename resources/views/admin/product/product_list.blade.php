@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="x_panel">

        <div class="x_title">
            <h2>Product List</h2>
            <div class="clearfix"></div>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="x_content">
            <div style="text-align: right">
                <a href="{{ route('admin.new_product_form') }}" target="_blank" class="btn btn-success">Add Product</a>
            </div>
            <table id="contact_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>MRP</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>                       
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
 
@section('script')
<script>
    $(function(){
        var table = $('#contact_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.product_list_ajax') }}",
            columns: [
                {data: 'id', name: 'id',searchable: true},
                {data: 'name', name: 'name',searchable: true},      
                {data: 'category', name: 'category',searchable: true},      
                {data: 'sub_category', name: 'sub_category',searchable: true},         
                {data: 'image', name: 'image',searchable: true},         
                {data: 'price', name: 'price',searchable: true},      
                {data: 'mrp', name: 'mrp',searchable: true},      
                {data: 'action', name: 'action',searchable: true},      
            ]
        });
    })
</script>
@endsection