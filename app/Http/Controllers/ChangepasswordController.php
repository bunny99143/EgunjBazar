<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangepasswordController extends Controller
{
    public function index()
    {
        $user=Auth::user();

        return view('changepassword.edit',compact(['user'=>'user']));   
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [             
            'cpassword' => 'required',
            'new_password' => 'required|min:6',
            'old_password' => 'required'
        ]);


        if ($validator->fails()) { 
            return redirect()->back()->withErrors($validator)->withInput($request->all());             
        }
        // dd($request->all());
        $currentPassword = Auth::User()->password;
        if(Hash::check($request->old_password, $currentPassword))
        {
                    $user = User::find(Auth::User()->id);
                    $user->password = Hash::make($request->new_password);;
                    $user->save();
            return redirect('/home')->with('success', 'Your password has been updated successfully.');
        }else{
            return back()->with('error', 'your current password was not recognised. Please try again.');
        }
        
    }
    
    /**
     * Validate password entry
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validatePasswords(array $data)
    {
        $messages = [
            'password.required' => 'Please enter your current password',
            'new-password.required' => 'Please enter a new password',
            'new-password-confirmation.not_in' => 'Sorry, common passwords are not allowed. Please try a different new password.'
        ];
    
        $validator = Validator::make($data, [
            'password' => 'required',
            'new-password' => ['required', 'same:new-password', 'min:8', Rule::notIn($this->bannedPasswords())],
            'new-password-confirmation' => 'required|same:new-password',
        ], $messages);
    
        return $validator;
    }
}
