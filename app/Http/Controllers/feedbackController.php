<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\User;
use Auth;
class feedbackController extends Controller
{
    public function store(Request $request){
        $feedback = new Feedback;
        $idd=Auth::user()->id;
    
        $usr=User::find($idd);
        $sub=$request->input('sub');
        $message=$request->input('message');

        $feedback->subject=$sub;
        $feedback->message=$message;
        $feedback->user_id=$idd;
        $usr->feedback()->save($feedback);
        return redirect()->route('home') ->with('success','You have submit your feedback');
          
    }
}
