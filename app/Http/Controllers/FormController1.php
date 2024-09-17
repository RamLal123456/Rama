<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Demo;

class FormController1 extends Controller
{
    public function formHandle(Request $ram){
        $ram->validate([
            'fname'=>'required',
            'lname'=>'required',
            'surname'=>'required',
            'address'=>'required|min:5|max:100',
            'mob'=>'required|min:8|max:12',
            'lq'=>'required',
            'fathername'=>'required',
            'mothername'=>'required',
            'dob'=>'required'
        ]);
        $demo = new Demo;
        $demo->name = $ram->name;
        $demo->email = $ram->email;
        $demo->save();
    }

    public function datalist(){
        $ram1 = ['fname'=>'ram','lname'=>'lal','surname'=>'gupta','dob'=>'5/7/2002','mob'=>'7758881520','fathername'=>'rajendra','mothername'=>'devi','address'=>'belghat','lq'=>'diploma'];
        return view('list',['data'=>$ram1]);
    }
} 