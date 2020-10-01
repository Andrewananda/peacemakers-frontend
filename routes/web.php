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

Route::get('/',[
    'uses'=>'ChurchController@index'
])->name('home');

//Prayer Request
Route::get('/prayer-request',[
    'uses'=>'ChurchController@getPrayerRequest'
])->name('prayer.request');

Route::post('/post-request',[
    'as'=>'post.prayer-request', 'uses'=>'ChurchController@createPrayerRequest'
]);

//about
Route::get('/about',[
    'as'=>'about', 'uses'=>'ChurchController@about'
]);

Route::get('/donation',function (){
    return view('donation');
})->name('donation');

//Contact Request
Route::get('/contact',[
    'uses'=>'ChurchController@getContactPage'
])->name('contact');

Route::post('/post-contact',[
    'as'=>'post.contact','uses'=>'ChurchController@postContact'
]);

//Fellowship
Route::get('/fellowship/{id}/',[
    'as'=>'single.fellowship', 'uses'=>'ChurchController@singleFellowship'
]);

//Sermons
Route::get('/sermon/{id}',[
    'as'=>'single.sermon', 'uses'=>'ChurchController@singleSermon'
]);

Route::get('/sermons',[
    'as'=>'sermons', 'uses'=>'ChurchController@sermons'
]);


//bulletin
Route::get('/bulletin/{id}',[
    'as'=>'single.bulletin', 'uses'=>'ChurchController@singleBulletin'
]);
