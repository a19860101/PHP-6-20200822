<?php

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
Route::get('post/{id}/{num}', function($id,$num){
    // return view('post',['id' => $id , 'num' => $num]);
    // return view('post')->with(['id' => $id , 'num' => $num]);
    // return view('post')->with(['id' => $id]);
    return view('post',compact('id','num'));
});
Route::get('about', function(){
    return view('about');
});
Route::get('contact', function(){
    return view('contact');
});
