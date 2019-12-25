<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminviews.index');
    }
    public function edit($admin){
        $admin = Admin::find($admin);
        return view('adminviews.editpages.editprofilepage',compact('admin')); 
    }

    public function update(Request $request,$admin){
        $admin = Admin::find($admin);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if(!empty($request->password)):
        $admin->password = Hash::make($request->password);
        endif;
        if($admin->save()):
            return back()->with('editprofilemsg',setflashmsg('success','Profile Edited Successfully.'));
        else:
            return back()->with('editprofilemsg',setflashmsg('danger','Something went wrong.'));
        endif;

    }
}
