<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware("guest:admin",['except'=>['adminlogout']]);
	}

    public function showloginform(){
    	return view('auth.adminlogin');
    }

    public function login(Request $request){
    	
    	$this->validate(
    		$request,
    		[
    			'email' => 'required|email',
    			'password' => 'required'
    		]
    	);
    	if(Auth::guard('admin')->attempt(['email'=>$request->email,'password' => $request->password],false)):
    		return redirect()->intended(route('admin'));
    	else:
    		return redirect()->back()->with('adminloginmsg',setflashmsg('danger',"Invalid Values"));
    	endif;
    }

    public function adminlogout(){
    	Auth::guard('admin')->logout();
    	return redirect()->route('admin.login');
    }
}
