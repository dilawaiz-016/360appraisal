<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function Test(Request $request)
    {
        dd($request);
    }
}
