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
