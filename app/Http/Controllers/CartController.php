<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $product_data=Product::find($request->product_id);
        
        Cart::where('user_id',auth()->user()->id)->delete();
        
        $cart = new Cart();
        $cart->user_id=auth()->user()->id;
        $cart->product_id=$request->product_id;
        $cart->quantity=$request->que;
        $cart->price=$product_data->product_price;
        $cart->total_price=($product_data->product_price*$request->que);
        $cart->save();
        
        return $request->all();
     
    }

    public function get_to_cart(Request $request)
    {
        
        $cart_data=Cart::where('user_id',auth()->user()->id)->first();

        $product_data=Product::find($cart_data->product_id);
        
        if($cart_data){            
            return view('cart_data',compact(['cart_data'=>'cart_data','product_data'=>'product_data']));
        }
        return response()->json(['status'=>'0']);    

        
     
    }

}
