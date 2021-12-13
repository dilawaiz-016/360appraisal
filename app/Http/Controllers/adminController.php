<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\otherEvalution;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
class adminController extends Controller
{
    //
    public function index(){
    //    $data=User::select('id' ,'created_at')->get()->groupBy(function($data){
    //     return Carbon::parse($data->created_at)->format('M');
    //    });
    //    dd($data);
        $avgoth = DB::table('other_evalutions')->pluck('rateing')->avg();
        $avgsel = DB::table('self_evalutions')->pluck('percentage')->avg();
        $tot=($avgsel+$avgoth)/2;
        $users= User::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at' ,date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');
        
        $months= User::select(DB::raw("Month(created_at) as month"))
        ->whereYear('created_at' ,date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        // dd($months);
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $datas[$month] =$users[$index];
        }
        return view('admin.admin' ,compact('datas' ,'tot'));
    }

    public function userActivity(){
        $oth=otherEvalution::all();
        return view('admin.useractivity' ,['activity'=> $oth]);
    }

    public function addhr(){
       
        return view('admin.addhr');
    }

    public function storehr(Request $request ){
         
        // $userse = DB::table('users')->where('id', '=', $id)->get()->first();
        // dd($userse);
        // return view('admin.edituser' , ['user'=>$userse]);
        $email=$request->input('email');
        $nam=$request->input('nam');
        $pas=$request->input('passw');
        DB::table('users')->insert(['name'=>$nam,'email'=>$email,'role'=>'hr','password'=>Hash::make($pas)]);
        // $affected = DB::table('users')
        //       ->where('id', $id)
        //       ->update(['name' => $nam ,'email'=>$email , 'role'=>$rol]);
        return redirect('/admin');      

    }
}



