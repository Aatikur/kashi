@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="x_panel">

        <div class="x_title">
            <h2>Product Inquiry List</h2>
            <div class="clearfix"></div>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="x_content">
            <table id="contact_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Product Name</th>
                        <th>Name</th>
                        <th>City/Vill</th>
                        <th>Phone</th>
                        
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
            ajax: "{{ route('admin.inquiry_list_ajax') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable: true},
                {data: 'product_name', name: 'product_name',searchable: true},      
                {data: 'name', name: 'name',searchable: true},      
                {data: 'city', name: 'city',searchable: true},      
                {data: 'phone', name: 'phone',searchable: true},         
                
            ]
        });
    })
</script>
@endsection