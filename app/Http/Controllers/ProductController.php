<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use Auth;

class ProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->id!=1){
        $product= Product::join('categories','categories.id','products.category_id')
                    ->select('products.*','categories.category_name')
                    ->where('products.user_id',Auth::user()->id)
                    ->get();
        }else{
            $product= Product::join('categories','categories.id','products.category_id')
                    ->select('products.*','categories.category_name')
                    ->get();
                    foreach($product as $key=>$value){
                        $user_data=User::find($value->user_id);
                        $value->user_name=$user_data->f_name." ".$user_data->l_name;
                    }
                    
        }
        return view('product.index',compact(['product'=>'product']));   
        
    }

    public function create()
    {
        $category= Category::pluck('category_name','id');

        return view('product.create',compact('category'));
    }

    public function store(Request $request)
    {
        // dd("bunny");
        $request->validate([
            'category_id' =>'required',
            'product_name' => 'required',
            'product_image' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required',

        ]);


        $new_name="";
        if($request->file('product_image'))
        {
        $file = $request->file('product_image');
            if(isset($file) && $file != "") {
            
            $new_name = rand().'.'.$request->file('product_image')-> getClientOriginalExtension();

            $request->file('product_image')->move(public_path('images/product_image/'), $new_name);
            }
        }

        $form_data=array(
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,

            'product_name' => $request->product_name,
            'product_image' => $new_name,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price

            
        );
        Product::create($form_data);

       return redirect()->route('product.index')
       ->with('success','Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category= Category::pluck('category_name','id');

        return view('product.edit',compact(['category'=>'category','product'=>'product']));   
        
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $input=$request->all();
        if(isset($product) && !empty($product)) {

            $new_name="";
            if($request->file('product_image'))
            {
            $file = $request->file('product_image');
            
                if(isset($file) && $file != "") {                
                    
                $new_name = rand().'.'.$request->file('product_image')-> getClientOriginalExtension();

                $request->file('product_image')->move(public_path('images/product_image/'), $new_name);
                $product->product_image = $new_name;
                // dd($new_name);
                }
            }

            $product->product_name = $input['product_name'];
            $product->product_desc = $input['product_desc'];
            $product->category_id = $input['category_id'];
            $product->product_price = $input['product_price'];


            
            $product->save();

            return redirect('/product')->with('success','Product updated successfully.');
        } else {
            return redirect('/product')->with('error','Product not found.');
        }

    }

    public function show(Request $request)
    {
       
        return view('commission.show');   

    }
    public function destroy($id)
    {
        $product= Product::find($id);
        if(isset($product) && !empty($product)) {
            $product->delete();

            return redirect('/product')->with('success','Product Deleted Successfully.');
        } else {
            return redirect('/product')->with('error','Product not found.');
        }
    }

}
