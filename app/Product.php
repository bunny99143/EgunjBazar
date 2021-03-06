<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name','product_price','product_image','product_desc','category_id','user_id'
    ];
}
