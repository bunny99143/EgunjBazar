<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    
    protected $fillable = [
        'user_id','product_price','quantity','price','total_price'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
}
