<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
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

/* Route::get('/insert',function(){
    DB::insert('insert into posts(title,content,is_admin)values(?,?,?)',['PHP with Laravel 5','Laravel is the best thing that happen with php2',1]);
}); */

 /*Route::get('/read',function(){
    $results=DB::select('SELECT * FROM posts WHERE id=?',[1]);
    print_r($results);
});

Route::get('/update',function(){
    DB::update('update posts set title="Update title" WHERE id=?',[1]);
});

Route::get('/delete',function(){
    $deleted=DB::delete('delete from posts where id=?',[1]);
    return $deleted;
}); */
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

/* Route::get('/find',function(){
    $posts=Post::all();

    foreach($posts as $key=>$post){
        echo $post->title."<br>";
    }
}); */

Route::get('/findwhere',function(){
    //$posts=Post::where('id',2)->get();
    /* $posts=Post::orderBy('id','desc')->take(1)->get();
    print_r($posts);

    foreach($posts as $key=>$post){
        echo ($key+1).$post->title."<br>";
    } */
    $post=Post::find(4);
    echo $post->title;
});

Route::get('/savepost',function(){
    $post=new Post;

    $post->title='New post';
    $post->content='This is new post';
    $post->is_admin=1;

    $post->save();
});

Route::get('/updatepost',function(){
    $post=Post::find(7);

    $post->title='New post 2';
    $post->content='This is new post 2';
    $post->is_admin=1;

    $post->save();
});

Route::get('/creatpost',function(){
    Post::create(['title'=>'new create post','content'=>'This is create method','is_admin'=>1]);
});

Route::get('/updatepost',function(){
    //Post::where('id',2)->where('is_admin',1)->update(['title'=>'updating 2']);
    Post::where(['id'=>2,'is_admin'=>1])->update(['title'=>'updating 3']);
});

Route::get('/deletepost',function(){
    // $post=Post::find(2);
    // $post->delete();

    //Post::destroy(3);

});

Route::get('/softdelete',function(){
    Post::find(3)->delete();
});

Route::get('/readsoftdelete',function(){
    //$post=Post::find(3);
    //print_r($post);

    /* $posts=Post::withTrashed()->get();
    foreach($posts as $key=>$post){
        echo $post->id;
        echo "<br>";
    } */
    //print_r($posts);

    //$post=Post::onlyTrashed()->get();
    //print_r($post);
    //echo $post[0]->id;
});

Route::get('/restore',function(){
    Post::withTrashed()->where('is_admin',1)->restore();
});

Route::get('/forcedelete',function(){
    //Post::onlyTrashed()->where('is_admin',1)->forceDelete();
});

//ELOQUENT Relationships
Route::get('/user/{id}/post',function($id){
    return User::find($id)->post;
});

Route::get('/post/{id}/user',function($id){
    return Post::find($id)->user;
});

Route::get('/posts',function(){
    $posts=User::find(1)->posts;
    foreach($posts as $post){
        echo $post->title."<br>";
    }
});
