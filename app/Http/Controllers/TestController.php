<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return "hello my controller";
    }
    public function Demo(){
        return "hello my Demo controller";
    }
    public function returnView(){
        return view('about');
    }

    public function requestHandle(Request $request){
        print_r($request->name);
        print_r($request->firstname);
        print_r($request->surname);
        
    }
}
