<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Cart;
use App\Product;
use Auth;

class BussinessOrderController extends Controller
{
    public function index()
    {
        $product_ids=Product::where('user_id',Auth::user()->id)->pluck('id');
        $orders= Orders::leftjoin('products','products.id','orders.product_id')
                    ->leftjoin('categories','categories.id','products.category_id')
                    ->select('products.product_name','products.product_image','categories.category_name','orders.*')
                    ->whereIn('orders.product_id',$product_ids)
                    ->orderby('orders.id','desc')
                    ->get();
                    // $orders= "";
                    // dd($orders);
        return view('bussiness_orders.index',compact(['orders'=>'orders']));  
        
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
        return view('bussiness_orders.show',compact('orders'));  

    }

    public function update(Request $request,$id)
    {
       $order= Orders::find($id);
       $order->order_status=$request->order_status;
       $order->save();

       return redirect('/myorders')->with('success','Order Status update successfully.');

    }
}
