<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Carrier;
use App\Models\SubCategory;
class WebController extends Controller
{
    public function category(){
        $category = Category::get();
        $subcategory = SubCategory::get();
        return view('web.product.catagory',compact('category','subcategory'));
    }

    public function career(){
        $career = Carrier::get();
        return view('web.career.career',compact('career'));
    }
}
