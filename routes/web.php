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

Route::get('/', 'c1@index');
Route::resource('m1', 'c2');
Route::post('/beefOrder', 'c2@beef');
Route::post('/chickenOrder', 'c2@chicken');
Route::post('/houseOrder', 'c2@house');
Route::post('/frenchOrder', 'c2@french');
Route::post('/proteineOrder', 'c2@proteine');
Route::post('/pastaOrder', 'c2@pasta');
Route::post('/plattersOrder', 'c2@platters');
Route::post('/beverageOrder', 'c2@beverage');
Route::post('/addsOrder', 'c2@adds');


Route::post('/chickenAdded', 'c2@storeChicken');
Route::post('/houseAdded', 'c2@storeHouse');
Route::post('/frenchAdded', 'c2@storeFrench');
Route::post('/proteineAdded', 'c2@storeProteine');
Route::post('/pastaAdded', 'c2@storePasta');
Route::post('/plattersAdded', 'c2@storePlatters');
Route::post('/beverageAdded', 'c2@storeBeverage');
Route::post('/addsAdded', 'c2@storeAdds');


Route::get('/beefInput', 'c2@beefInput');
Route::get('/chickenInput', 'c2@chickenInput');
Route::get('/houseInput', 'c2@houseInput');
Route::get('/frenchInput', 'c2@frenchInput');
Route::get('/proteineInput', 'c2@proteineInput');
Route::get('/pastaInput', 'c2@pastaInput');
Route::get('/plattersInput', 'c2@plattersInput');
Route::get('/beverageInput', 'c2@beverageInput');
Route::get('/addsInput', 'c2@addsInput');


Route::get('/mi/create', 'c2@create');
Route::get('/addChicken', 'c2@createChicken');
Route::get('/addHouse', 'c2@createHouse');
Route::get('/addFrench', 'c2@createFrench');
Route::get('/addProteine', 'c2@createProteine');
Route::get('/addPasta', 'c2@createPasta');
Route::get('/addPlatters', 'c2@createPlatters');
Route::get('/addBeverage', 'c2@createBeverage');
Route::get('/addAdds', 'c2@createAdds');




Route::get('/submit', 'c2@submit');
Route::get('/kichen', 'c2@kichen');

Route::get('/resetData', 'c2@reset');


Route::get('/mi/{{id}}/editChicken', 'c2@editChicken');
Route::get('/mi/{id}/editHouse', 'c2@editHouse');
Route::get('/mi/{{id}}/editFrench', 'c2@editFrench');
Route::get('/mi/{{id}}/editProteine', 'c2@editProteine');
Route::get('/mi/{{id}}/editPasta', 'c2@editPasta');
Route::get('/mi/{{id}}/editPlatters', 'c2@editPlatters');
Route::get('/mi/{{id}}/editBeverage', 'c2@editBeverage');
Route::get('/mi/{{id}}/editAdds', 'c2@editAdds');



Route::get('/tokenEdit', 'c2@tokenEdit');
Route::get('/totalEdit', 'c2@totalEdit');
Route::get('/discountEdit', 'c2@discountEdit');



Route::post('/updatedChicken', 'c2@updateChicken');
Route::post('/updatedHouse', 'c2@updateHouse');
Route::post('/updatedFrench', 'c2@updateFrench');
Route::post('/updatedProteine', 'c2@updateProteine');
Route::post('/updatedPasta', 'c2@updatePasta');
Route::post('/updatedPlatters', 'c2@updatePlatters');
Route::post('/updatedBeverage', 'c2@updateBeverage');
Route::post('/updatedAdds', 'c2@updateAdds');



Route::post('/tokenUpdated', 'c2@tokenUpdate');
Route::post('/totalUpdated', 'c2@totalUpdate');
Route::post('/discountUpdated', 'c2@discountUpdate');


Route::post('/deletedtedChicken', 'c2@destroyChicken');
Route::post('/deletedtedHouse', 'c2@destroyHouse');
Route::post('/deletedtedFrench', 'c2@destroyFrench');
Route::post('/deletedtedProteine', 'c2@destroyProteine');
Route::post('/deletedtedPasta', 'c2@destroyPasta');
Route::post('/deletedtedPlatters', 'c2@destroyPlatters');
Route::post('/deletedtedBeverage', 'c2@destroyBeverage');
Route::post('/deletedtedAdds', 'c2@destroyAdds');



//Route::get('/reset', 'c2@reset2');


Route::get('/input', 'c2@input');

Route::get('/itemAdd', 'c2@itemAdd');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
