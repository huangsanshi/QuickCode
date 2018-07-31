<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'StaticPagesController@home')->name('home');

Route::get('help','StaticPagesController@help')->name('help');

Route::get('about','StaticPagesController@about')->name('about');
//注册
//Route::get('signup','UsersController@create')->name('signup');
//定义用户资源路由
Route::resource('users','UsersController');
// 上面等同于下面
// Route::get('/users', 'UsersController@index')->name('users.index');
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// Route::get('/users/create', 'UsersController@create')->name('users.create');
// Route::post('/users', 'UsersController@store')->name('users.store');
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
// Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');