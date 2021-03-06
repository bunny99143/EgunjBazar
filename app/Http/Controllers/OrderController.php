<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrderController extends Controller
{
    public function index()
    {
        // $orders= Orders::join('categories','categories.id','products.category_id')
        //             ->select('products.*','categories.category_name')
        //             ->where('products.user_id',Auth::user()->id)
        //             ->get();
                    $orders= "";
        return view('orders.index',compact(['orders'=>'orders']));  
        
    }
}
