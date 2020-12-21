<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Image;
use File;
class ProductController extends Controller
{
    public function productList(){
       return view('admin.product.product_list');
    }

    public function addProductForm(){
       $category = Category::get();
       return view('admin.product.add_product_form',compact('category'));
    }

    public function retriveSubCategory($category_id){
        $sub_category = SubCategory::where('cat_id',$category_id)->get();
        return $sub_category;
    }

    public function productListAjax(Request $request)
    {
        return datatables()->of(Product::get())
            ->addIndexColumn()
            ->addColumn('category', function ($row) {
              
                if (isset($row->category->name)) {
                    return $row->category->name;
                } else {
                    return null;
                }
            })->addColumn('image', function ($row) {
                $img = '<img style="width:100px;height:100px;" src ="'.asset('images/products/thumb/'.$row->image).'">';
                return $img;
            })->addColumn('sub_category', function ($row) {
                if (isset($row->subCategory->name)) {
                    return $row->subCategory->name;
                } else {
                    return null;
                }
            })->addColumn('action', function ($row) {
               $btn = '<a href="' . route('admin.edit_product', ['id' => $row->id]) . '" class="btn btn-info btn-sm" target="_blank">Edit</a>';
               return $btn;
            })
            ->rawColumns(['category','action','sub_category','image'])
            ->make(true);
    }

    public function insertProduct(Request $request){
       $this->validate($request, [
            'name'   => 'required',
            'category'   => 'required',
            'sub_category'   => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
            'mrp' => 'required',
            'price' => 'required',
        ]);

       
        $name = $request->input('name');
        $category = $request->input('category');
        $sub_category = $request->input('sub_category');
        $mrp = $request->input('mrp');
        $price = $request->input('price'); 


    
        $short_description = $request->input('short_description');
        $description = $request->input('description');

        $product = new Product();
        $product->name = $name;
        $product->cat_id = $category;
        $product->sub_cat_id = $sub_category;
        $product->mrp = $mrp;
        $product->price = $price;
        $product->short_desc = $short_description;
        $product->long_desc = $description;
        
       
        if ($request->hasFile('product_image')) {
           
            /** Images Upload **/
            $path = base_path() . '/public/images/products/';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path() . '/public/images/products/thumb/';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);
           

            $image = $request->file('product_image');
            $image_name = time() . date('Y-M-d') . '.' . $image->getClientOriginalExtension();
            
            //Product Original Image
            $destinationPath = base_path() . '/public/images/products';
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath . '/' . $image_name);
            //Product Thumbnail
            $destination = base_path() . '/public/images/products/thumb';
            $img = Image::make($image->getRealPath());
            $img->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination . '/' . $image_name);

         
            $product->image = $image_name;
        }   
        if($product->save()){
            return redirect()->back()->with('message', 'Product Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong Please Try Again');
        }
    
    }

    public function editProductForm($id){
        $product_details = Product::where('id',$id)->first();
        $category = Category::get();
        return view('admin.product.edit_product_form',compact('product_details','category'));
    }

    public function updateProduct(Request $request,$id){
        $this->validate($request, [
            'name'   => 'required',
            'category'   => 'required',
            'sub_category'   => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
            'mrp' => 'required',
            'price' => 'required',
        ]);

       
        $name = $request->input('name');
        $category = $request->input('category');
        $sub_category = $request->input('sub_category');
        $mrp = $request->input('mrp');
        $price = $request->input('price'); 


    
        $short_description = $request->input('short_description');
        $description = $request->input('description');

        $product = Product::where('id',$id)->first();
        $product->name = $name;
        $product->cat_id = $category;
        $product->sub_cat_id = $sub_category;
        $product->mrp = $mrp;
        $product->price = $price;
        $product->short_desc = $short_description;
        $product->long_desc = $description;
        
       
        if ($request->hasFile('product_image')) {
            $path = base_path() . '/public/images/products/';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path() . '/public/images/products/thumb/';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);
            $image = $request->file('product_image');
            $image_name = time() . date('Y-M-d') . '.' . $image->getClientOriginalExtension();

            $destinationPath = base_path() . '/public/images/products';
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath . '/' . $image_name);
            $prev_img_delete_path = base_path() . '/public/images/products/' . $product->image;
            if (File::exists($prev_img_delete_path)) {
                File::delete($prev_img_delete_path);
            }
            $prev_img_delete_path_thumb = base_path() . '/public/images/products/thumb/' . $product->image;
            $destination = base_path() . '/public/images/products/thumb';
            $img = Image::make($image->getRealPath());
            $img->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destination . '/' . $image_name);
            if (File::exists($prev_img_delete_path_thumb)) {
                File::delete($prev_img_delete_path_thumb);
            }
           $product->image = $image_name;
        } 
        if($product->save()){
            return redirect()->back()->with('message', 'Product Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong Please Try Again');
        }
    
    


    }


}
