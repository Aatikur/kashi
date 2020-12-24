<?php

namespace App\Http\Controllers\Admin\Inquiry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductInquiry;

class InquiryController extends Controller
{

    public function index(){
        return view('admin.inquiry.index');
    } 

    public function show(){
        $query = ProductInquiry::latest();
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->editColumn('product_name', function($row){
           $data = isset($row->product->name)?$row->product->name:'';
           return $data;
        })
       
        ->rawColumns(['product_name'])
        ->make(true);
    }

}