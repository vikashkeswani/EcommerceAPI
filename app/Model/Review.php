<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    public function user()
{
    return $this->belongsTo('App\Model\Product', 'product_id', 'id');
}
}
