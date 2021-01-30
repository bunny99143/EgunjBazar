<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function register(Request $request){
        // dd($request->all());
        $insert=[
            'email'=>$request->email,
            'f_name'=>$request->f_name,
            'l_name'=>$request->l_name,
            'phone_number'=>$request->phone_number,
            'password'=>$request->password,
        ];        
        User::create($insert);
        
        return redirect('/login')->with('success','Register successfully.');
        
    }

    public function login(Request $request){
             

        $user_data=User::where('email',$request->email)->where('password',$request->password)->first();
        if($user_data){
            return redirect('/dashboard')->with('success','Login successfully.');

        }        
        return redirect('/login')->with('error','Invalid user & password.');
        
    }
    public function dashboard(Request $request){
             

        $user_data=User::where('email',$request->email)->where('password',$request->password)->first();
        dd($user_da);
        if($user_data){
            return redirect('/dashboard')->with('success','Login successfully.');

        }        
        return redirect('/login')->with('error','Invalid user & password.');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
