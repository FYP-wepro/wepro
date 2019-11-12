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

//Route::get('/', function () {
  //  return view('index');
//});

Route::get('/','CatagoryesController@mainCatagory');

Route::get('/addSubCatagory','CatagoryesController@addSubCatagory');

Route::get('/addSubCatagoryInsert','CatagoryesController@addSubCatagoryInsert');

//Route::get('subCatagory{id}','CatagoryesController@mainCatagory');


Route::get('subCatagory/{id}','CatagoryesController@subCatagory');
Route::get('/subCatagory2','CatagoryesController@subCatagory2');

Route::get('/register','sellerController@mainCatagory');






Route::get('/ajax','CatagoryesController@ajax');
Route::get('/getName','CatagoryesController@getName');
Route::get('/main','CatagoryesController@main');


Route::get('/sellerSignup','sellerController@signup');
Route::get('/professional' ,'sellerController@professional');

//Route::get('/personal', 'sellerController@personal');

//Route::get('image', 'sellerController@index');
 Route::post('personal', 'sellerController@personal')->name('personal');

 Route::get('/personalSave','sellerController@personalSave');

 Route::get('sellers','sellerController@sellers');

 Route::get('/S_dashboard','sellerController@dashboard');

Route::get('showSeller/{id}','sellerController@showSeller');

Route::get('/sellerProfile/{id}','sellerController@sellerProfile');
Route::get('/sellerLogin','sellerController@login');
Route::get('/sellerLogout','sellerController@logout');



///////////////////////////////////////////////// Post Request //////////////////////////

Route::get('/jobRequestForm','requestController@form');
Route::get('/requestForm','requestController@sendRequest');
Route::get('/returnPage','requestController@returnSeller');
Route::get('/showRequest','requestController@showRequest');
Route::get('/buyerData','requestController@buyerData');



Route::get('/vue',function(){

 	return view('vue');

 });

//////////////////////////////////////////// buyer //////////////////////////
Route::get('/buyerSignup', 'buyerController@signup');

Route::get('/buyerLogin','buyerController@login');

Route::get('/buyerRegister','buyerController@register');

Route::post('/Buyerpersonal','buyerController@personal');
Route::get('BuyerPersonalSave','buyerController@savePersonal');



Route::get('/B_dashboard','buyerController@dashboard');

Route::get('/buyerLogout','buyerController@logout');
Route::get('/buyerRequests','buyerController@buyerRequests');

Route::get('deleteRequest/{id}','buyerController@deleteRequest');
