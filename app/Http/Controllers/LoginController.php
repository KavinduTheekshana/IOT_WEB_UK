<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MobileLogin(Request $request)
    {

        $JsonArray=[];
        if(isset($request->username) && isset($request->password) && $request->username!="" &&  $request->password!=""){
            $user = DB::table('users')->where('email','=', $request->username)->first();  
            if($user!=null){
            
                if($user->password==Hash::check($request->password, $user->password)){
                        $JsonArray['code']='1';
                        $JsonArray['user']=$user;
                        $JsonArray['msg']='Login Successful';
                }else{
                    $JsonArray['code']='0';
                    $JsonArray['msg']='Password Incorrect';      
                }
            }else{
                $JsonArray['code']='0';
                $JsonArray['msg']='Not Found Use By That Username';              
            }
        }else{
            $JsonArray['result']='Please Fill The Email and password';
            $JsonArray['code']='0';
        }

        return json_encode($JsonArray);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    return redirect('/login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
}
