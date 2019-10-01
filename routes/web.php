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

 Route::get('/S_dashboard',function(){

 	return view('welcome');

 });

Route::get('showSeller/{id}','sellerController@showSeller');



