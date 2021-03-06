<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\ContactUs;

class ContactController extends Controller
{
    public function  index() { 
        $user=Auth::user();

        return view('contact_us'); 
      } 
      public function store(Request $request)
    {
        $request->validate([
            'f_name' =>'required',
            'l_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
        ]);

        $form_data=array(
            'f_name' => $request->f_name,
            'subject' =>$request->subject,
            'l_name' => $request->l_name,
            'email' => $request->email,       
        );

        ContactUs::create($form_data);

       return redirect()->route('contact_us.index')
       ->with('success','Thanks for contact us.');
    }

}
