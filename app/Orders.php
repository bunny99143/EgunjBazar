<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id','product_id','quantity','price','total_price','order_status','order_address','transaction_id'
    ];

    public function customer(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function product(){
        return $this->hasOne('App\Product','id','product_id');
    }
}
