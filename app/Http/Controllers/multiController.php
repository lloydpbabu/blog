<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class multiController extends Controller{
    public function mult(Request $request)
    {
        $mul= $request->number1*$request->number2;
return view('ans',['result'=>$mul]);
    }
}