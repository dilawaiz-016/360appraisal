<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class showuserController extends Controller
{
    public function index(){
        $usr=User::all();
        // dd($usr);
        return view('admin.showuser' ,['user'=>$usr]);

    }


    public function Useredit(Request $request , $id){
        //  dd($request->method);
        // if($request->method()== "GET"){
        //     dd($request->method());
        // }
        // else{
        //     dd("not");
        // }
        $userse = DB::table('users')->where('id', '=', $id)->get()->first();
        // dd($userse);
        return view('admin.edituser' , ['user'=>$userse]);

    }

    public function Userupdate(Request $request ){
         
        // $userse = DB::table('users')->where('id', '=', $id)->get()->first();
        // dd($userse);
        // return view('admin.edituser' , ['user'=>$userse]);
        $email=$request->input('email');
        $nam=$request->input('nam');
        $rol=$request->input('role');
        $id=$request->input('idd');
        $affected = DB::table('users')
              ->where('id', $id)
              ->update(['name' => $nam ,'email'=>$email , 'role'=>$rol]);
        return redirect('/admin');      

    }


    public function deleteUser($id)
    {
        User::find($id)->delete();
        return back()->with('success','User deleted successfully');
    }



}
