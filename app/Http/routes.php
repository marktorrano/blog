<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::resource('posts', "PostController");
    Route::resource('comments', "CommentController");
    Route::resource('users', "UserController");
    
    Route::get('login', "LoginController@showLoginForm");    
    Route::post('login', "LoginController@processLogin");    
    Route::get('logout', "LoginController@logout");
    
    Route::get('blogs', function(){
        
        $posts = App\Models\Post::all();
        
        return view('browseblog', ['posts'=>$posts]);
    });
    
});
