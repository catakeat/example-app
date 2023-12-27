<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('test');
});

Route::get('/about/{name}',function($name){
    //echo $name;
    return view('about',['name'=>$name]);
});


/*
Route::get('/about/{name}', function($name) {
    //echo $name;
    return view('about', ['name' => $name]);
});*/
Route::get('users',[UserController::class,'viewLoad']);
Route::post('users',[UserController::class,'getData']);
Route::get('/getusers',[UserController::class,'index']);
Route::get('/getusers_using_model',[UserController::class,'index1']);

Route::view('noaccess','noaccess');

Route::group(['middleware'=>['protectedPage']],function(){
    Route::view('/test','test2');
});

Route::view("login","login");
Route::post('user',[UserAuth::class,'userLogin']);
Route::view('profile','profile');
Route::get('/logout',function(){
    if(session()->has('user')){
        session()->pull('user');
        echo "in pull";
    }
    else{
        dd(session()->all());
       // return "in else";
    }
    redirect('login');
});

Route::view('fileupload','fileupload');
Route::post('upload',[UploadController::class,'uploadFile']);
Route::view('add','members');
Route::post('add',[CrudController::class,'addMember']);
Route::get("/delete/{id}",[CrudController::class,"delete"]);
Route::get('/edit/{id}',[CrudController::class,'edit']);
Route::post('update',[CrudController::class,'update']);
//ROUte mode binding
Route::get('test1/{membr}',[CrudController::class, 'testRouteModelBinding']);