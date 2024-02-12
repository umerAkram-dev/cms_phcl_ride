<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', 'RideController@index')->name('ride');


Route::middleware(['auth'])->group(function () {
    Route::get('home', 'Admin\HomeController@ride_page')->name('admin.ride_page');
    Route::get('/admin/settings', 'Admin\HomeController@settings')->name('admin.settings');
    Route::get('/admin/footer', 'Admin\HomeController@footer')->name('admin.footer');
    Route::post('update_content', 'Admin\ContentController@update')->name('admin.update_content');
    Route::get('/admin/header', 'Admin\HomeController@header')->name('admin.header');
    Route::get('/admin/delete_img/{col}/{img}', 'Admin\HomeController@delete_img')->name('admin.delete_img');

    Route::get('/admin/qurey_listing', 'Admin\HomeController@QureyListing')->name('admin.qurey_listing');

    Route::get('/admin/change_password/index', 'Admin\ChangePasswordController@index')->name('admin.change_password_index');
    Route::post('/admin/change_password', 'Admin\ChangePasswordController@ChangePassword')->name('admin.change_password');
    Route::get('logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
