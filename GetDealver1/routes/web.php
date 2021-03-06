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
	Route::get('filtersearch/{key}/{local}/{place_0}/{place_1}/{place_2}/{place_3}/{price}/{flag}/{sort}','AjaxController@filterSearch');
});
Route:: group(['prefix'=>'ajax'],function(){
	Route::get('searchresult/{key}/{local}/{place_0}/{place_1}/{place_2}/{place_3}/{price}/{flag}','AjaxController@searchResult');
});
Route::get('result/{key_search}','GetDealController@getResult');
Route::get('findresult/{key_search}','GetDealController@getFindResult');
// Route::get('admin',[
// 	'as'=>'admin',
// 	'uses'=> 'AdminController@getLayout'
// ]);
//  Route::get('danhmuc',[
// 	'as'=>'danhmuc',
// 	'uses'=> 'AdminController@getDanhMuc'
// ]);
//   Route::get('quanlisanpham',[
// 	'as'=>'quanlisanpham',
// 	'uses'=> 'AdminController@getDanhSachSanPham'
// ]);
Route::get('admin/dangnhap','AdminController@getDangNhap');
Route::post('admin/dangnhap','AdminController@postDangNhap');
Route:: group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'danhmuc'],function(){
		Route::get('danhsach','AdminController@getDanhMuc');
		Route::get('sua','AdminController@getSuaDanhMuc');
		Route::get('editdone','AdminController@getEditDoneDanhMuc');
		Route::get('them','AdminController@getThemDanhMuc');
		Route::get('xoa','AdminController@getXoaDanhMuc');
	});
	Route::get('trangchu','AdminController@getLayout');
	Route::get('quanlisanpham','AdminController@getDanhSachSanPham');
	Route::get('email','AdminController@getEmail');
	Route::get('xulimail','AdminController@getXuliMail');

});

Route::get('searchlanding','GetDealController@getSearchLanding');
Route::get('gioithieu','GetDealController@getGioiThieu');
Route::get('lienhe','GetDealController@getLienHe');
Route::post('lienhe','GetDealController@postLienHe');