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
    return redirect()->route('login.index');
});

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/availablebus', 'AvailablebusController@index')->name('availablebus.index');
Route::get('/buyticket/{id}', 'BuyTicketController@index')->name('buyticket.index');
Route::post('/buyticket/{id}', 'BuyTicketController@store')->name('buyticket.store');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@store')->name('registration.store');

Route::get('/login/admin', 'AdminController@index')->name('admin.index');

Route::get('/admin/ticket', 'BuyTicketController@show')->name('buyticket.show');
Route::get('/admin/availablebus/show', 'AvailablebusController@show')->name('availablebus.show');
Route::get('/admin/availablebus/edit{id}', 'AvailablebusController@edit')->name('availablebus.edit');
Route::post('/admin/availablebus/edit{id}', 'AvailablebusController@update')->name('availablebus.update');
Route::get('/admin/availablebus/delete{id}', 'AvailablebusController@delete')->name('availablebus.delete');
Route::post('/admin/availablebus/delete{id}', 'AvailablebusController@destroy')->name('availablebus.destroy');
Route::get('/admin/availablebus/add', 'AvailablebusController@addNewBus')->name('availablebus.add');
Route::post('/admin/availablebus/add', 'AvailablebusController@addBus')->name('availablebus.addBus');

Route::get('/mpdf', 'PdfController@index')->name('pdf.index');
