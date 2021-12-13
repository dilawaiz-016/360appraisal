<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\selfEvalution;
use App\Models\otherEvalution;
use App\Models\userevaluation;



class evaluateController extends Controller
{
    public function evaluate($id){
        $usre= new userevaluation;
        $st="";
        $dat1="0";

        $dat=DB::table('other_evalutions')
                ->where('to_user_id', $id)
                ->avg('rateing');

        $seldat=DB::table('self_evalutions')->Select('percentage')
            ->where('user_id', $id)->pluck('percentage');
        // dump(!empty($seldat));
        
        if(empty($seldat)){
           
            $dat1=(int)$seldat[0];
        }
       
         $avgg=ceil(($dat+$dat1)/2);
        //  dd($avgg); 
        if($dat> 20 and $dat<=40){
            $st="Eliminate from organization";
         }      
        if($dat> 40 and $dat<=80){
           $st="we'll provide you facility to train yourself";
        }
        if($dat < 40){
            $st="your performance is too bad, we'll not consider this : Warning";
         }
        if($dat> 80){
            $st=" organization is pleased with your performance";
        }
       
       $usre->user_id=$id;
       $usre->result=$avgg;
       $usre->decesion=$st;
       $usre->save();
    //    dd($dat);
       return redirect('/hr/reportDecision');
        // $user_info = DB::table('users')
        // ->join('other_evalutions', 'users.id', '=', 'other_evalutions.to_user_id')
        // ->select('name','other_evalutions.to_user_id',DB::raw('avg(other_evalutions.rateing) as average'),DB::raw('count(*) as total'))
        // ->groupBy('to_user_id')
        // ->get();
    }
}
