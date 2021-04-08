<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Cart;
use App\Product;
use App\Events\OrderPlaceEvent;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        if(Auth::user()->id==1){
            // $orders= Orders::leftjoin('products','products.id','orders.product_id')
            // ->leftjoin('categories','categories.id','products.category_id')
            // ->leftjoin('users','users.id','products.user_id')
            // ->select('users.f_name as b_first_name','users.l_name as b_last_name','products.product_name','products.product_image','categories.category_name','orders.*')
            // ->orderby('orders.id','desc')
            // ->get();

            $orders= Orders::leftjoin('products','products.id','orders.product_id')
                    ->leftjoin('categories','categories.id','products.category_id')
                    ->leftjoin('users','users.id','orders.user_id')
                    ->select('users.b_first_name','orders.order_address as address','users.b_last_name','users.email','users.phone_number','products.product_name','products.product_image','categories.category_name','orders.*')

                    ->where('orders.id',$id)
                    ->first();
                    // dd($orders);
                    // $orders= "";
        return view('bussiness_orders.show',compact('orders'));  
        }else{
            $orders= Orders::leftjoin('products','products.id','orders.product_id')
                    ->leftjoin('categories','categories.id','products.category_id')
                    ->leftjoin('users','users.id','products.user_id')
                    ->select('users.f_name as b_first_name','users.l_name as b_last_name','products.product_name','products.product_image','categories.category_name','orders.*')
                    ->where('orders.user_id',Auth::user()->id)
                    ->orderby('orders.id','desc')
                    ->get();
        }
        // dd($orders);
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
        
            $cart_data=Cart::where('user_id',auth()->user()->id)->first();
            $order_array=[
                'user_id'=>$cart_data->user_id,
                'product_id'=>$cart_data->product_id,
                'quantity'=>$cart_data->quantity,
                'price'=>$cart_data->price,
                'total_price'=>$cart_data->total_price,
            ];

            $order_place = Orders::create($order_array);


            $order_data = Orders::with(['customer','product'])->where('id',$order_place->id)->first();
          
            event(new OrderPlaceEvent($order_data));
            $cart_data=Cart::where('user_id',auth()->user()->id)->delete();
            return response()->json(['status'=>'1']);
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

            $order_place = Orders::create($order_array);
            $order_data = Orders::with(['customer','product'])->where('id',$order_place->id)->first();
          
            event(new OrderPlaceEvent($order_data));

            $cart_data=Cart::where('user_id',auth()->user()->id)->delete();
            return response()->json(['status'=>'1']);
        // }
        // return view('cart_data',compact(['cart_data'=>'cart_data','product_data'=>'product_data']));
    }

}
