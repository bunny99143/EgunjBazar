<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user());
        // echo "yes i m here";
        return view('home');
    }

    public function welcome()
    {

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
    
    return view('product_details',compact(['product'=>'product'])); 
}
}
