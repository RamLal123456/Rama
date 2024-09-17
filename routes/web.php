<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormControler;
use App\Http\Controllers\FormController1;
 
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test/ram', function(){
//     return 'this is hello ram';
// });
                       
// Route::get('/route/test', function(){
//     return 'Hello Ram how are you';
// });

// // View Route                                                                                                                     
// Route::get('/welcome', function(){
//     return view('hello.test');
// });

// // Required Parameter Route
// Route::get('/welcome/{id}/{name}', function($name,$last){
//     return $name.$last;
// });

// //OptionalParameter Route
// Route::get('/hello/{name?}', function($name='Ram'){
//     return 'Hello'.$name;
// });



// Route::get('/ram', function(){
//     return 'Hello ram lal ji';
// });  

// Route::get('/ji', function(){
//     return 'Ram Ram ji';
// });

// Route::get('/ramji', function(){
//     return 'Ram ram';
// });

// Route::get('/ramji', function(){
//     return view('ram.ramji');
// });

// Route::get('/jai', function(){
//     return view('ram.ram');
// });

// Route::get('/ji/{id}/{address}', function($name,$address){
//     return $name.$address;
// });

Route::get('/ji/{address?}', function($address='belghat'){
    return 'hello'.$address;
});

// View route

Route::View('/hiii','welcome');

// Redirect route optional

Route::Redirect('/welcome','/hii');

// Permanent Redirect

// Route::Redirect('/welcome','/hii',301);
Route::permanentRedirect('/welcome','/hiii');

// dusre url get file 

Route::get('/index',function(){
    return view('home');
});

// Named Route 

Route::get('/',function(){
    return view('welcome');
})->name('ram');

// Prefix Route

Route::prefix('admin')->group(function(){
    Route::get('user',function(){
        return "Hello user";
    });
    Route::get('order',function(){
        return "Hello order";
    });
});

Route::view('/about','about');

Route::view('/homepage','home');

Route::view('/main','contact');

// 11/09/2024

Route::get('/index',function(){
    $arr =[1,2,3,4,5];
    return view('home',['name'=>$arr]);
});

// Controller

Route::get('/controller-test',[TestController::class,'test']);
Route::get('/controller-demo',[TestController::class,'Demo']);
Route::controller(TestController::class)->group(function(){
    Route::get('/controller-test','test');
    Route::get('/controller-demo','demo');
    Route::get('/controller-view','returnView');
    Route::get('/request-handle','requestHandle');
    // Route::get('/request-handle','requestHandle');
});


Route::post('/form-post',[FormControler::class,'formHandle'])->name('form');

Route::view('/form','form');
Route::get('/data-list',[FormControler::class,'datalist']);


// Route::post('/form-post',[FormController1::class,'formHandle'])->name('formdata');
// Route::view('/form-data','formdata');
// Route::get('/data',[FormController1::class,'datalist']);