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

Route::get('/', function (){
    return redirect('/kh');
});

Route::get('/{language?}', function ($language=null){
    App::setLocale($language);
    return view('index');
})->name('home');


Route::get('/{language?}/house', function ($language=null){
    App::setLocale($language);
    return view('house_page');
})->name('house');

Route::get('/{language?}/land', function ($language=null){
    App::setLocale($language);
    return view('land_page');
})->name('land');



/*facebook login*/
Route::get('/{language?}/login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook_login');
Route::get('laravel_example/callback/facebook', 'Auth\LoginController@handleProviderCallback');



Route::get('/{language?}/test', function(){
    return view('index_page_partials.index_contact_us');
});
