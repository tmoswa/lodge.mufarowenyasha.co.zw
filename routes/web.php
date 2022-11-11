<?php

use Illuminate\Support\Facades\Route;
use App\Review;
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
    $current_review=Review::OrderBy('id','DESC')->where('id',0)->get();
    return view('welcome',compact('current_review'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book/{name}', 'MainController@init_booking')->name('book');
Route::get('/suites', 'MainController@suites')->name('suites');
Route::post('/room_booking', 'MainController@room_booking')->name('room_booking');
Route::post('/finishbooking', 'MainController@finishbooking')->name('finishbooking');
Route::post('/availability', 'MainController@availability')->name('availability');
Route::post('/message_us', 'MainController@message_us')->name('message_us');
Route::post('/review_post', 'MainController@review_post')->name('review_post');
Route::get('/gallery', 'MainController@gallery')->name('gallery');


Route::get('/rooms', function () {
    return view('booking_main');
});

