<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/insert',function(){
    DB::insert('insert into posts(title,content,is_admin)values(?,?,?)',['PHP with Laravel','Laravel is the best thing that happen with php',1]);
});

Route::get('/read',function(){
    $results=DB::select('SELECT * FROM posts WHERE id=?',[1]);
    print_r($results);
});

Route::get('/update',function(){
    DB::update('update posts set title="Update title" WHERE id=?',[1]);
});

Route::get('/delete',function(){
    $deleted=DB::delete('delete from posts where id=?',[1]);
    return $deleted;
});
/* Route::get('/', function () {
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
}]); */

//Route::get('/post/{id}','PostsController@index');

/* Route::resource('posts','PostsController');
Route::get('/contact','PostsController@showMyPage');
Route::get('/post/{id}','PostsController@showPost'); */