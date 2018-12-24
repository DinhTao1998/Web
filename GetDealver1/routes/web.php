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
Route::get('index',[
	'as'=> 'Landing',
	'uses'=>'GetDealController@getIndex'
]);
// Route::get('home',[
// 	'as'=> 'Home',
// 	'uses'=>'GetDealController@getHome'
// ]);
Route::get('search',[
	'as'=>'search',
	'uses'=> 'GetDealController@getSearch'
]);
Route::get('search1',[
	'as'=>'search1',
	'uses'=> 'GetDealController@getSearch1'
]);
Route::get('filtersearch',[
	'as'=>'filtersearch',
	'uses'=> 'GetDealController@getSearch'
]);
Route:: group(['prefix'=>'ajax'],function(){
	Route::get('filtersearch/{key}/{local}/{place}/{price}/{flag}/{sort}','AjaxController@filterSearch');
});
Route:: group(['prefix'=>'ajax'],function(){
	Route::get('searchresult/{key}/{local}/{place}/{price}/{flag}','AjaxController@searchResult');
});