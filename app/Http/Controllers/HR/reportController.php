<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\otherEvalution;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\selfEvalution;
use App\Models\feedback;
use App\Models\hruser;
class reportController extends Controller
{
    public function index(){
        return view('HR.home');
    }

    public function storee($id){

        // $usr = DB::table('hrusers')->get();
        $ussr= new hruser;
        $ussr->user_id = $id;
        $ussr->save();
        return redirect('/generate');
        // dump($id);
        // $feed="";
        // $selv="";
        // $dat=DB::table('other_evalutions')->select('rateing')->where('to_user_id', $id)->get();
        // $feedback = new Feedback;
        // if (feedback::where('user_id', '=', $id)->exists()) {
        //     $feed=DB::table('Feedback')->select('message')->where('user_id', $id)->get();
        //  }else{
        //      $feed="0";
        //  }
        //  if (selfEvalution::where('user_id', '=', $id)->exists()) {
        //     $selv=DB::table('self_evalutions')->select('percentage')->where('user_id', $id)->get();
        //  }
        //  else{
        //      $selv="0";
        //  }
        //  $al="---------";
        //  $xr=DB::table('hrusers')->get();
       
        // dd($al,$dat,$feed ,$selv);

        // foreach ($xr as $w){
        //     dump($w);    }
        
        // $ussr= new hruser;
        // $ussr->user_id=$id;
        // $ussr->selfevl=$selv;
        // $ussr->othereval=$dat;
        // $ussr->feedback=$feed;
        // $ussr->save();
        // dd($dat ,$feed ,$selv);
    }

    public function reportStatus(){
        $use = DB::table('hrusers')->select('user_id')->pluck('user_id')->all();
        // $feed=DB::table('feedback')->where('user_id' ,$use)->get();
        // $self=selfEvalution::find($use);
        // dd($use);
        return view('HR.report' , ['user'=>$use]);
    }


    public function evaluateReport(){
        $use = DB::table('hrusers')->select('user_id')->pluck('user_id')->all();
        // $feed=DB::table('feedback')->where('user_id' ,$use)->get();
        // $self=selfEvalution::find($use);
        // dd($use);
        
        return view('HR.reportDecesion' , ['user'=>$use]);

    }

    public function evalutedUser(){

        $dataa=DB::table('userevaluations')->select('*')->get();
        // dd($dataa);
        return view('HR.evaluateduser' , ['dataa'=>$dataa]);
    }

}
