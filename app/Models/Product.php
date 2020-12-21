<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primarykey = 'id';

    protected $fillable = [
        'cat_id','sub_cat_id','name','image','short_desc','long_desc','mrp','price'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }
    public function subCategory(){
        return $this->belongsTo('App\Models\SubCategory','sub_cat_id','id');
    }
}
