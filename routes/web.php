<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/contact/send', function () {
    Mail::to('mail@gmail.com')->send(new ContactMail());
    return new ContactMail();
});*/



Route::get('/welcome',function () {
    return view('welcome');
});

Route::get('/posts',function (){
    return view('posts');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact', 'SendEmailController@index');
Route::post('/contact/send', 'SendEmailController@send');
Route::post('/contact/send', 'SendEmailController@save');

Route::get('/posts/create', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::post('/posts/send', 'PostController@send');
Route::post('/posts/send', 'PostController@save');

Route::get('/posts/create',function () {
    return  view('create-post');
});

Route::get('/sylva', function (){
    return view('sylva');
});

Route::get('/news', function ()
{
    return view('news');
});



