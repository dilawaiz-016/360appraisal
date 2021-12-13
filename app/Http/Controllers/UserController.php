<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
       $name = $request->input('nam');
       $email=$request->input('email');
       $passw=Hash::make($request->input('pass'));
       $rol=$request->role;


      
        $userData = array('name' => $name, 'email' => $email , 'password' => $passw ,'role'=>$rol);
        // dd($userData);
        User::create($userData);
        return redirect()->route('hrportal')
                        ->with('success','User created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        User::updateOrCreate(
            [
              'id' => $request->id
            ],
            [
              'name' => $request->name,
              'email' => $request->email,
              'password'=>$request->password,
              'role'=>$request->role
            ]
          );
      
          return response()->json(
            [
              'success' => true,
              'message' => 'Data inserted successfully'
            ]
          );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
