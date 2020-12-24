<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInquiry extends Model
{
    protected $table = 'product_inquiry';
    protected $primaryKey='id';

    protected $fillable = ['product_id','city','name','phone'];

    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
