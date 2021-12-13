<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\otherEvalution;
use Illuminate\Support\Facades\DB;
use Auth;

class managmentController extends Controller
{
    public function index($id){

     
        return view('eval.seniormanagment' ,['toid'=>$id]);
    }

    public function junior($id){

     
        return view('eval.juniormanagment' ,['toid'=>$id]);
    }

    public function rate(Request $request){

        $oth= new otherEvalution();
        $q1=$request->input('q1');
        $q2=$request->input('q2');
        $q3=$request->input('q3');
        $q4=$request->input('q3');
        $q5=$request->input('q5');
        $q6=$request->input('q6');
        $q7=$request->input('q7');
        $q8=$request->input('q8');
        $total=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8;
        $avg=($total/40)*100;
        $fusrid=Auth::user()->id;
        $tusrid=$request->input('touser');
        
       
        $oth->from_user_id=$fusrid;
        $oth->to_user_id=$tusrid;
        $oth->rateing= $avg;
        $userchk = DB::table('other_evalutions')
        ->where('from_user_id', '=',$fusrid )
        ->where('to_user_id', '=', $tusrid)
        ->get();
        
       

        if($userchk->isEmpty()){
            $oth->save();
            return redirect()->route('home')
            ->with('success','You have evaluate successfully');
            }
            else{
                return redirect()->route('home')
            ->with('success','already evaluate you');
            }
     
    }
    



}
