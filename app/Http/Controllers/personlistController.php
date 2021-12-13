<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Generator\StringManipulation\Pass\Pass;

class personlistController extends Controller
{
    //
    public function index($catag){
        $users = DB::table('users')->where('role' ,$catag)->where('id', '!=', auth()->id())->get();
        // dd($users);
        if($catag == 'senior'){
            return view('user/personlist' ,['user'=>$users]);
        }
        else{
            return view('user/juniorlist' ,['user'=>$users]);
        }
        
    }
}
