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



Route::get('/sellerSignup','CatagoryesController@signup');


Route::get('/test', function(){
	return view('seller.register2');
});

Route::get('/ajax','CatagoryesController@ajax');
Route::get('/main','CatagoryesController@main');