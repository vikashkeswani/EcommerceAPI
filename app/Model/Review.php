<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product ;
class Review extends Model
{
    
    public function product(){
        return $this->belongsTo(Product::class) ;
    }

    public function user(){
    return $this->belongsTo('App\Model\Product', 'product_id', 'id');
    }
    
}
