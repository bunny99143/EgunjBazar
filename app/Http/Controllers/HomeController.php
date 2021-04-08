<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use App\Orders;
use Auth;
use PDF;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Session;
use App\Events\OrderPlaceEvent;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        return view('home');
    }

    public function stripe()
    {
        return view('payment');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $cart_data=Cart::with(['customer'])->where('user_id',auth()->user()->id)->first();
        Stripe::setApiKey('sk_test_51IdC5fSHgrybNeXEY8rr0ZFoYGLnBmGz6SZfBaYduSaC7Ao5Ot7anvB37BE4wBW3HPcKntV5bj1XZc34TsUUyJWQ002nQraJWP');

        $customer = Customer::create(array(
            'email' => $cart_data->customer->email,
            'source'  => $request->stripeToken,
            'name' => $cart_data->customer->f_name." ".$cart_data->customer->l_name,
            'address' => [
                'line1' => '0',
                'postal_code' => '380001',
                'city' => $cart_data->customer->address,
                'state' => 'Gujarat',
                'country' => 'IN',
            ],
        ));

        $charge = Charge::create(array(
            'customer' => $customer->id,
            "description" => "Order Place - E-Gung" ,
            'amount'   => $cart_data->total_price,
            'currency' => 'inr'
        ));
        
        $order_array=[
            'user_id'=>$cart_data->user_id,
            'product_id'=>$cart_data->product_id,
            'quantity'=>$cart_data->quantity,
            'price'=>$cart_data->price,
            'total_price'=>$cart_data->total_price,
            'order_address'=>auth()->user()->address,
            'transaction_id'=>isset($charge->id)?$charge->id:null
        ];

        $order_place = Orders::create($order_array);
        $order_data = Orders::with(['customer','product'])->where('id',$order_place->id)->first();
      
        event(new OrderPlaceEvent($order_data));

        $cart_data=Cart::where('user_id',auth()->user()->id)->delete();

        return back()->with('status','yes');
    }

    public function welcome()
    {
        $user=Auth::user();
        if($user  && $user->role==1){
            return view('home');
        }
        $category = Category::all();
        return view('welcome',compact(['category'=>'category'])); 
    }

    public function products($id)
    {

        $product = Product::where('category_id',$id)->get();
        $category_name=Category::find($id);
        return view('product',compact(['product'=>'product','category_name'])); 
    }

    public function product_detail($id)
    {

        $product = Product::where('id',$id)->first();
        
        return view('product_details',compact(['product'=>'product','id'=>'id'])); 
    }
}
