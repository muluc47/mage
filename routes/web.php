<?php
use App\Http\Controllers\LanguageController;
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
// dashboard Routes

Route::get('/sk-layout-1-column','StarterKitController@column_1Sk');
Route::get('/sk-layout-2-columns','StarterKitController@columns_2Sk');
Route::get('/fixed-navbar','StarterKitController@fix_navbar');
Route::get('/sk-layout-fixed','StarterKitController@fix_layout');
Route::get('/sk-layout-static','StarterKitController@static_layout');
Route::get('/logout','StarterKitController@logout');

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/ecommerce', 'AccessController@home')->middleware('role:Admin');

    Route::get('/','StarterKitController@index');
    Route::get('sale-operation', 'SaleOperationController@index');
    Route::get('sale-operation/create', 'SaleOperationController@create');
    Route::post('sale-operation/store', 'SaleOperationController@store');
    Route::get('sale-operation/edit/{id}', 'SaleOperationController@edit');
    Route::post('sale-operation/update/{id}', 'SaleOperationController@update');
    Route::get('sale-operation/delete/{id}', 'SaleOperationController@destroy');


    Route::get('bayi-iletisim', 'BayiContactController@index');
    Route::get('bayi-iletisim/create', 'BayiContactController@create');
    Route::post('bayi-iletisim/store', 'BayiContactController@store');
    Route::get('bayi-iletisim/edit/{id}', 'BayiContactController@edit');
    Route::post('bayi-iletisim/update/{id}', 'BayiContactController@update');
    Route::get('bayi-iletisim/delete/{id}', 'BayiContactController@destroy');

    Route::get('istasyonlar', 'StationController@index');
    Route::get('istasyonlar/create', 'StationController@create');
    Route::post('istasyonlar/store', 'StationController@store');
    Route::get('istasyonlar/edit/{id}', 'StationController@edit');
    Route::post('istasyonlar/update/{id}', 'StationController@update');
    Route::get('istasyonlar/delete/{id}', 'StationController@destroy');

    Route::get('teminatlar', 'ContractController@index');
    Route::get('teminatlar/create', 'ContractController@create');
    Route::post('teminatlar/store', 'ContractController@store');
    Route::get('teminatlar/edit/{id}', 'ContractController@edit');
    Route::post('teminatlar/update/{id}', 'ContractController@update');
    Route::get('teminatlar/delete/{id}', 'ContractController@destroy');


Auth::routes();
Wizard::routes('wizard/user', 'UserWizardController', 'wizard.user');

Wizard::routes('wizard/sales_operation', 'SalesOperationWizardController', 'wizard.sales_operation');
/*
 * Tuncay Yapılanlar *
 *
 */
///Gönderilmesi Gereken lisans evrakları
Route::view('/license-document', 'license.index');
Route::view('/license-document/create', 'license.create');
//Bayilik İleri Yarıtım
Route::view('/dealership-investment', 'dealership-investment.index');
Route::view('/dealership-investment/create', 'dealership-investment.create');
