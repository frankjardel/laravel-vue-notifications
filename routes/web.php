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

Broadcast::routes();

Route::put('notification-all-read', 'NotificationController@markAllAsRead');
Route::put('notification-read', 'NotificationController@markAsRead');
Route::get('notifications', 'NotificationController@notifications')->name('notifications');

Route::post('order', [
	'uses' => 'OrderController@order',
	'as'	 => 'order'
]);

Route::get('/', function () {
   return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
