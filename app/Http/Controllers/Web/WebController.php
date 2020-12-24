<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Carrier;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\ProductInquiry;
use App\Models\Contact;
use App\Models\Job;
use App\Models\Blog;
use App\Models\Testimonial;
class WebController extends Controller
{
    public function category(){
       
        // first categorys subcategory
        $hpde_dr_products = Product::where('sub_cat_id',1)->get();
        $hpde_plb_products = Product::where('sub_cat_id',2)->get();
        $hdpe_ft_products =Product::where('sub_cat_id',3)->get();
        $hdpe_mdp_products = Product::where('sub_cat_id',4)->get();
        $hdpe_cl_products = Product::where('sub_cat_id',5)->get();

        //second category subcategory
        $agri_upvc_products = Product::where('sub_cat_id',6)->get();
        $agri_ft_products = Product::where('sub_cat_id',7)->get();
        $agri_col_products = Product::where('sub_cat_id',8)->get();
        
        //third category subcategory
        $plum_cpvc_products = Product::where('sub_cat_id',9)->get();
        $plum_ft_products = Product::where('sub_cat_id',10)->get();
        $plum_pipe_products = Product::where('sub_cat_id',11)->get();
        $plum_pipe_ft_products = Product::where('sub_cat_id',12)->get();
        $plum_swr_products = Product::where('sub_cat_id',13)->get();
        $plum_swr_ft_products = Product::where('sub_cat_id',14)->get();

        //fourth category subcategory
        $garden_hose_products = Product::where('sub_cat_id',15)->get();

        return view('web.product.catagory',compact('hpde_dr_products','hpde_plb_products','hdpe_ft_products','hdpe_mdp_products','hdpe_cl_products','agri_upvc_products','agri_ft_products','agri_col_products','plum_cpvc_products','plum_ft_products','plum_pipe_products','plum_pipe_ft_products','plum_swr_products','plum_swr_ft_products','garden_hose_products'));
    }

    public function product($id){
        $product = Product::where('id',$id)->first();
        $related_products = Product::where('sub_cat_id',$product->sub_cat_id)->where('id','!=',$product->id)->get();
      
        return view('web.product.product',compact('product','related_products'));
    }
    public function career(){
        $career = Carrier::latest()->where('status',1)->paginate(10);
        return view('web.career.career',compact('career'));
    }

    public function testimonial(){
        $testimonial = Testimonial::where('status',1)->latest()->paginate(10);
        return view('web.testimonial.testimonial',compact('testimonial'));

    }
    public function blog(){
        $blog = Blog::latest()->where('status',1)->paginate(10);
        return view('web.blog.blog',compact('blog'));

    }

    public function blogDetail($slug,$id){
        $single_post = Blog::find($id);
        return view('web.blog.blog-detail',compact('single_post'));
    }

    public function inquiry(Request $request,$id){
        $inquiry = new ProductInquiry();
        $inquiry->product_id = $id;
        $inquiry->city = $request->input('city');
        $inquiry->name = $request->input('name');
        $inquiry->phone = $request->input('phone');
        $inquiry->save();
        return redirect()->back();
    }

    public function addContact(Request $request){
      
        $this->validate($request, [
            'name'   => 'required',
            'email' => 'required',
           
            'message' => 'required'
        ]);

        $contact =  new Contact();
        $contact->full_name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->contact_no = $request->input('phone');
        $contact->message = $request->input('message');
            if(!empty($request->input('subject'))){
            $contact->subject = $request->input('subject');
            }
        
        $contact->save();
        if($contact->save()){
            return  redirect()->back()->with('message','Contact Added Successfully');
        }

    }

    public function addCv(Request $request){
      
        $this->validate($request, [
            'full_name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|unique:jobs,email',
            'designation'=> 'required',
            'cv'=>'required|mimes:pdf,doc,docx|max:2048'
            
        ]);

        $job =  new Job();
        $job->full_name = $request->input('full_name');
        $job->email = $request->input('email');
        $job->mobile = $request->input('phone');
        $job->designation = $request->input('designation');
        
        $job->status =1;
        if($job->save()){
            if($request->hasFile('cv')){
                $file = $request->file('cv');
                $filename = time() . '.' . $request->file('cv')->extension();
                $filePath = public_path() . '/web/documents/';
                $file->move($filePath, $filename);
                $job->resume = $filename;
            }

        }
        if($job->save()){
            return redirect()->back()->with('message','Success');
        }

    }

     
}
