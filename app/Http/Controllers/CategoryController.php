<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\product;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::all();
        return view('category.index',compact(['category'=>'category']));   
        
    }

    public function create()
    {
       
        return view('category.create');
    }

    public function store(Request $request)
    {
        // dd("bunny");
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'required',
            'category_desc' => 'required',
        ]);

        $new_name="";
        if($request->file('category_image'))
        {
        $file = $request->file('category_image');
            if(isset($file) && $file != "") {
            
            $new_name = rand().'.'.$request->file('category_image')-> getClientOriginalExtension();

            $request->file('category_image')->move(public_path('images/category_image/'), $new_name);
            }
        }

        $form_data=array(
            'category_name' => $request->category_name,
            'category_image' => $new_name,
            'category_desc' => $request->category_desc,
            
        );
        Category::create($form_data);

       return redirect()->route('category.index')
       ->with('success','Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',compact(['category'=>'category']));   
        
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $input=$request->all();
        if(isset($category) && !empty($category)) {

            $new_name="";
            if($request->file('category_image'))
            {
            $file = $request->file('category_image');
            
                if(isset($file) && $file != "") {                
                    
                $new_name = rand().'.'.$request->file('category_image')-> getClientOriginalExtension();

                $request->file('category_image')->move(public_path('images/category_image/'), $new_name);
                $category->category_image = $new_name;
                // dd($new_name);
                }
            }

            $category->category_name = $input['category_name'];
            $category->category_desc = $input['category_desc'];
            
            $category->save();

            return redirect('/category')->with('success','Category updated successfully.');
        } else {
            return redirect('/category')->with('error','Category not found.');
        }

    }

    public function show(Request $request)
    {
       
        return view('commission.show');   

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if(isset($category) && !empty($category)) {
            $category->delete();

            return redirect('/category')->with('success','Category Deleted Successfully.');
        } else {
            return redirect('/category')->with('error','Category not found.');
        }
    }

}
