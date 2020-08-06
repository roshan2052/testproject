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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'supersite/', 'as' => 'backend.supersite.','namespace' => 'Backend\Supersite\\','middleware' => ['web','auth']], function () {
    Route::get('dashboard',     ['as' => 'dashboard.index',     'uses' => 'DashboardController@index']);

    //Test
    Route::get('test',                                       ['as' => 'test.index',                           'uses' => 'TestController@index']);
    Route::get('test/create',                                ['as' => 'test.create',                          'uses' => 'TestController@create']);
    Route::post('test/',                                     ['as' => 'test.store',                           'uses' => 'TestController@store']);
    Route::get('test/{id}/edit',                             ['as' => 'test.edit',                            'uses' => 'TestController@edit']);
    Route::get('test/{id}',                                  ['as' => 'test.show',                            'uses' => 'TestController@show']);
    Route::put('test/{id}/update',                           ['as' => 'test.update',                          'uses' => 'TestController@update']);
    Route::delete('test/{id}/delete',                        ['as' => 'test.delete',                          'uses' => 'TestController@destroy']);


});
