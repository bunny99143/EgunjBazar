<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Cart;
use App\Product;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders= Orders::leftjoin('products','products.id','orders.product_id')
                    ->leftjoin('categories','categories.id','products.category_id')
                    ->select('products.product_name','products.product_image','categories.category_name','orders.*')
                    ->where('orders.user_id',Auth::user()->id)
                    ->orderby('orders.id','desc')
                    ->get();
                    // $orders= "";
        return view('orders.index',compact(['orders'=>'orders']));  
        
    }

    public function show(Request $request,$id)
    {
       $orders= Orders::leftjoin('products','products.id','orders.product_id')
                    ->leftjoin('categories','categories.id','products.category_id')
                    ->leftjoin('users','users.id','orders.user_id')
                    ->select('users.f_name','orders.order_address as address','users.l_name','users.email','users.phone_number','products.product_name','products.product_image','categories.category_name','orders.*')
                    ->where('orders.id',$id)
                    ->first();
                    // dd($orders);
                    // $orders= "";
        return view('orders.show',compact('orders'));  

    }

    public function order_place(Request $request)
    {
        
        // $cart_data=Cart::where('user_id',auth()->user()->id)->first();
        //     $order_array=[
        //         'user_id'=>$cart_data->user_id,
        //         'product_id'=>$cart_data->product_id,
        //         'quantity'=>$cart_data->quantity,
        //         'price'=>$cart_data->price,
        //         'total_price'=>$cart_data->total_price,
        //     ];

        //     Orders::create($order_array);

        //     return response()->json(['status'=>'1']);
        // }
        return view('order_form');
        // return view('order_form',compact(['cart_data'=>'cart_data','product_data'=>'product_data']));
    }

    public function place_order(Request $request)
    {
        
        $cart_data=Cart::where('user_id',auth()->user()->id)->first();
            $order_array=[
                'user_id'=>$cart_data->user_id,
                'product_id'=>$cart_data->product_id,
                'quantity'=>$cart_data->quantity,
                'price'=>$cart_data->price,
                'total_price'=>$cart_data->total_price,
                'order_address'=>auth()->user()->address,
            ];

            Orders::create($order_array);

            return response()->json(['status'=>'1']);
        // }
        // return view('cart_data',compact(['cart_data'=>'cart_data','product_data'=>'product_data']));
    }

}
