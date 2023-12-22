<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

