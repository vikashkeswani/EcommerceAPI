<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review ;
use Illuminate\Database\Eloquent\Relationships\HasMany;
class Product extends Model
{
    protected $fillable = [
        'name','detail','price','stock','discount'
    ] ;
    public function reviews(){
        return $this->hasMany(Review::class) ;
    }
}
