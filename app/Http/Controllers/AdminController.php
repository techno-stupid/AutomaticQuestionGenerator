<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function showRegistrationForm()
    {
    	return view('admin.register.adminRegister');
    }
    public function registerAdmin(Request $request)
    {
    	$this->validate($request,[
            'name' => 'required',   
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect('/admin/manage')->with('message','New Admin Created !!');
    }
    public function manageAdmins()
    {
    	$admins = DB::table('users')
    		->get();
    	return view('admin.manageAdmins',['admins'=>$admins]);
    }
    public function deleteAdmin($id)
    {
        $adminById = User::find($id);
        $adminById->delete();
        return redirect('/admin/manage')->with('message','Admin Deleted Successfully !!');
    }
    public function adminProfile($id)
    {
        $adminById = User::find($id);
        return view('admin.adminProfile.adminProfile',['adminById'=>$adminById]);
    }
    public function changeInfo($id)
    {
        $adminById = User::find($id);
        return view('admin.adminProfile.changeInfo',['adminById'=>$adminById]);
    }
    public function changeInfoPost(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',   
            'email' => 'required|email',
        ]);
        $admin = User::find($request->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect('/admin/profile/'.$admin->id)->with('message','Profile Updated Successfully !!');
    }
    public function changePw($id)
    {
        $adminById = User::find($id);
        return view('admin.adminProfile.changePw',['adminById'=>$adminById]);
    }
    public function changePwPost(Request $request)
    {
        $admin = User::find($request->id);
        $this->validate($request,[
            'password' => 'required|min:6',
        ]);
        if($request->password != $request->newPassword)
        {
        	return redirect('/admin/change/pw/'.$admin->id)->with('message','Passwords does not match !!');
        }
        $newpass = Hash::make($request->newPassword);
        $admin->password = $newpass;
        $admin->save();
        return redirect('/admin/change/pw/'.$admin->id)->with('message2','Password Changed Successfully !!');
    }
}
