<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedback;

class showfeedbackController extends Controller
{
    public function index(){
        $feed = new feedback;
        $dat=feedback::all();
        // $comment = feedback::find(1)->comments()
        return view('admin.feedback' ,['user'=>$dat]);
    }

    public function delete($id)
{
    feedback::find($id)->delete();
    return back()->with('success','Post deleted successfully');
}
}
