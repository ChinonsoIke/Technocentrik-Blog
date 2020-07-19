<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    protected function guard()
    {
        return Auth::guard('admin');
    }
     public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }


    public function showLogin(){
        
        return view('auth.admin.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' =>'required|email',
            'password' => 'required|min:6'
        ]);
        $credentials =['email'=>$request->email,'password'=>$request->password];
        $remember = $request->remeber;
        //Attempt to log user
        $credentials = $request->only('email', 'password');

       
        try{

            //if (Auth::attempt($credentials)) {
                if(Auth::guard('admin')->attempt($credentials,$remember)){
                    return redirect()->intended(route('admin'));
                }else{
                    return redirect()->back()->withInput($request->only('email','remeber'))->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
                }

        }catch(Exception $e){
            return redirect()->back()->withInput($request->only('email','remeber'))->with('warning', 'You need '.$e->getMessage());
        }
        
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return back()->with('success','Logout successful');
    }
}
