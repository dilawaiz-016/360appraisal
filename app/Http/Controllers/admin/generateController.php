<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\otherEvalution;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class generateController extends Controller
{
    public function index(){

        
        // $user_info = DB::table('other_evalutions')
        //          ->join('users', 'to_user_id', '=', 'users.id')
        //          ->select('to_user_id' ,DB::raw('count(*) as total'))
        //          ->groupBy('to_user_id')
        //          ->get();


        $user_info = DB::table('users')
        ->join('other_evalutions', 'users.id', '=', 'other_evalutions.to_user_id')
        ->select('name','other_evalutions.to_user_id',DB::raw('avg(other_evalutions.rateing) as average'),DB::raw('count(*) as total'))
        ->groupBy('to_user_id')
        ->get();

        
                //  dd($user_info);

        return view('admin.generate' ,   ['user'=>$user_info]);        


    }
}
