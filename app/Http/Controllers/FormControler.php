<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Demo;

class FormControler extends Controller
{
    public function formHandle(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $demo = new Demo;
        $demo->name = $req->name;
        $demo->email = $req->email;
        $demo->save();
        return "data success";
    }

    public function datalist(){
        $data1 = ['name'=>'ram','email'=>'ram@gmail.com'];
        return view('list',['data'=>$data1]);
    }
}