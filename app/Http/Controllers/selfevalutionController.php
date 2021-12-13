<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\selfEvalution;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
use Auth;
class selfevalutionController extends Controller
{
    public function store(Request $request){
        $selfev= new selfEvalution();
        $q1=$request->input('q1');
        $q2=$request->input('q2');
        $q3=$request->input('q3');
        $q4=$request->input('q3');
        $q5=$request->input('q5');
        $q6=$request->input('q6');
        $q7=$request->input('q7');
        $q8=$request->input('q8');
        $total=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8;
        $avg=($total/32)*100;
        $usrid=Auth::user()->id;
         $user=User::find($usrid);
        $selfev->percentage= $avg;
        // $selfev->user_id=Auth::user()->id;
       
        if(!DB::select('select * from self_evalutions where user_id = ?', [$usrid])){
        $user->selfev()->save($selfev);
        return redirect()->route('home')
        ->with('success','You have evaluate you successfully');
        }
        else{
            
            return redirect()->route('home')
        ->with('success','You have already evaluate you');
        }
        // echo $q1." ".$q2." ".$q3." ".$q4." ".$q5." ".$q6." ".$q7." ".$q8."<br>";
        // echo $total;
        // $user_id = 
        // $usr =$Auth::user->id;
        // echo $avg.'%'." ".$user_id; 
        // exit();

    }
}
