<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user=Auth::user();

        return view('profile.edit',compact(['user'=>'user']));   
    }

    public function update(Request $request, $id)
    {
        $user=Auth::user();      

        $input=$request->all();
        if(isset($user) && !empty($user)) {

            $new_name="";
            if($request->file('profile_image'))
            {
            $file = $request->file('profile_image');
            
                if(isset($file) && $file != "") {                
                    
                $new_name = rand().'.'.$request->file('profile_image')-> getClientOriginalExtension();

                $request->file('profile_image')->move(public_path('images/profile_image/'), $new_name);
                $user->profile_image = $new_name;
                }
            }

            $user->f_name = $input['f_name'];
            $user->l_name= $input['l_name'];
            $user->email = $input['email'];
            $user->phone_number = $input['phone_number'];
            $user->address = $input['address'];
            $user->save();

            return redirect('/home')->with('success','Profile updated successfully.');
        } else {
            return redirect('/profile')->with('error','Profile not found.');
        }

    }
}
