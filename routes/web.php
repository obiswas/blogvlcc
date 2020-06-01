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

/* Route::get('/blog/{post}', function ($post) {
	$posts=[
		'blog1' => 'My first blog',
		'blog2' => 'My second blog'
	];
    return view('welcome',[
	'post' =>$posts[$post]
	]);
}); */
Route::get('/','HomeController@index');
//fetch all post
Route::get('/blogs','blog@allshow');
Route::get('/blogs/{slug}','blog@show');
Route::get('/blogsearch', function()
{
   // return $_GET['keywords'];
	 return redirect('/blogs/'.$_GET['keywords']);
});
