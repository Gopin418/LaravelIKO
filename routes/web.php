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



//IKO
Route::get('/IKO', 'HSEController@IKO');
Route::post('/IKO', 'HSEController@store');

//JSA
Route::get('/JSA', 'HSEController@JSA');
Route::post('/JSA', 'HSEController@storeJSA');

//ADL
Route::get('/ADL', 'HSEController@ADL');
Route::post('/ADL', 'HSEController@storeADL');

//IPB
Route::prefix('IPB')->group(function() {
    Route::get('/', 'HSEController@IPB');
    Route::post('/', 'HSEController@storeLampiran');

    Route::get('/ruang-terbatas', 'HSEController@ruangTerbatas');
    Route::post('/ruang-terbatas', 'HSEController@storeRuangTerbatas');

    Route::get('/kebakaran', 'HSEController@kebakaran');
    Route::post('/kebakaran', 'HSEController@storeKebakaran');

    Route::get('/ketinggian', 'HSEController@ketinggian');
    Route::post('/ketinggian', 'HSEController@storeKetinggian');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::prefix('admin')->group(function () {

    //Dashboard
    Route::get('/', 'AdminController@index');

    Route::prefix('utility')->group(function() {

      // Halaman Approval Utility
      Route::get('/', 'UtilityController@index');

      //post utility
      Route::post('/air', 'UtilityController@storeAir');
      Route::post('/angin', 'UtilityController@storeAngin');
      Route::post('/listrik', 'UtilityController@storeListrik');
      Route::post('/steam', 'UtilityController@storeSteam');
    });
    Route::get('/calendar', 'CalendarController@index');
    //Admin list
    Route::get('/list', 'Admin@index');
    Route::put('/list/{id}', 'Admin@update');
    Route::delete('/list/{id}', 'Admin@destroy');

    //Halaman Role
    Route::get('/role', 'Admin@role');

    //Halaman Add User
    Route::get('/add', 'Admin@add');
    Route::post('/add', 'Admin@store');

    Route::prefix('IKO')->group(function () {

        Route::get('/pending', 'IKO@pending');
        Route::put('/pending/{id}', 'IKO@update');

        Route::get('/approved', 'IKO@approved');
    });

    Route::prefix('JSA')->group(function () {

        Route::get('/pending', 'JSAController@pending');
        Route::put('/pending/{id}', 'JSAController@update');

        Route::get('/approved', 'JSAController@approved');
    });

    Route::prefix('ADL')->group(function () {

        Route::get('/pending', 'ADLController@pending');
        Route::put('/pending/{id}', 'ADLController@update');

        Route::get('/approved', 'ADLController@approved');
    });

});
