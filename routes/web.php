<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return "About";
});

Route::get('/contact',function(){
    return "Contact";
});

Route::get('/post/{id}/{name}',function($id,$name){
    return $id."|".$name;
});

Route::get('admin/posts/exampls',['as'=>'admin.home',function(){
    $url=route('admin.home');
    return $url;
}]);
