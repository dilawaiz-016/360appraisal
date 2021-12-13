<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class profile extends Controller
{
    public function index($id){
          $usr=User::find($id);
         
          return view('user.profile' ,compact('usr'));
      
    }

    public function store(Request $request ,$id){
        $image="";
        $usr = new User();
        $nam=$request->input('name');
        $em=$request->input('email');
        $rol=$request->input('role');
        if($request->hasfile('imeg')){
            $file=$request->file('imeg');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/user/',$filename);
            $image= $filename;

        }
        DB::table('users')
            ->where('id', $id)
            ->update(['name' => $nam,
                    'email'=>$em,
                    'role'=>$rol,
                    'image'=>$image
        ]);
        
        Session::flash('message', 'Profile has been Updated!');
        return redirect()->back()->with('status' ,'profile updated');
        }
}
