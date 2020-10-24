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
// Route::get('post', 'PostController@index')->name('post.index');
// Route::get('post/show/{id}','PostController@show')->name('post.show');
// Route::get('post/create', 'PostController@create')->name('post.create');
// Route::post('post','PostController@store')->name('post.store');
// Route::delete('post/{id}','PostController@destroy')->name('post.destroy');
// Route::get('post/edit/{id}','PostController@edit')->name('post.edit');
// Route::put('post/{id}','PostController@update')->name('post.update');

// Route::name('post.')->group(function(){
//     Route::get('post', 'PostController@index')->name('index');
//     Route::get('post/show/{id}','PostController@show')->name('show');
//     Route::get('post/create', 'PostController@create')->name('create');
//     Route::post('post','PostController@store')->name('store');
//     Route::delete('post/{id}','PostController@destroy')->name('destroy');
//     Route::get('post/edit/{id}','PostController@edit')->name('edit');
//     Route::put('post/{id}','PostController@update')->name('update');
// });
// Route::prefix('post')->group(function(){
//     Route::get('', 'PostController@index')->name('post.index');
//     Route::get('{id}','PostController@show')->name('post.show');
//     Route::get('create', 'PostController@create')->name('post.create');
//     Route::post('','PostController@store')->name('post.store');
//     Route::delete('{id}','PostController@destroy')->name('post.destroy');
//     Route::get('edit/{id}','PostController@edit')->name('post.edit');
//     Route::put('{id}','PostController@update')->name('post.update');
// });
// Route::resource('post','PostController')->middleware('auth');

Route::group(['middleware'=>'auth'],function(){
    Route::resource('post','PostController')->except('index');
});
Route::resource('post','PostController')->only('index');
// Route::get('post','PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'PostController@index')->name('index');

//自訂登出頁面
Route::get('logout','App\Http\Controllers\Auth\LoginController@logout');


Route::resource('category','CategoryController');

// Route::get('/trash','PostController@trash')->name('trash.index');
// Route::get('/trash/{id}','PostController@restore')->name('trash.restore');
// Route::delete('/trash/{id}','PostController@delete')->name('trash.delete');

Route::group(['prefix'=>'trash'],function(){
    Route::get('/','PostController@trash')->name('trash.index');
    Route::get('/{id}','PostController@restore')->name('trash.restore');
    Route::delete('/{id}','PostController@delete')->name('trash.delete');
});