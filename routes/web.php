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


Route::group(['middleware' => 'visitors'], function(){

	Route::get('/', 'AccountController@getLogin')->name('login');
	Route::post('/', 'AccountController@processLogin')->name('login');

});

// logout 
Route::post('logout', 'AccountController@logout')->name('logout');

Route::get('reset-password', function(){
	return view('reset-password');
})->name('reset-password');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('dashboard', 'ProductController@adminDashboard')->name('admin-dashboard');

	// Register
	Route::get('register', 'AccountController@getRegister')->name('register');
	Route::post('register', 'AccountController@postRegister')->name('register');

	// Users
	Route::get('all_companies', 'CompanyController@getAllCompanies')->name('all_companies');

	// Department
	Route::get('department', 'DepartmentController@getDepartment')->name('department');
	Route::post('department', 'DepartmentController@processDepartment')->name('department');
	Route::get('all_department', 'DepartmentController@getAllDepartment')->name('all_department');
});

Route::group(['prefix' => 'company', 'middleware' => 'company'], function () {
    Route::get('dashboard', 'ProductController@dashboard')->name('user-dashboard');
	Route::get('all_products', 'ProductController@getAllProducts')->name('all_products');
	Route::get('add_products', 'ProductController@addProducts')->name('add_products');
	Route::post('add_products', 'ProductController@postAddProducts')->name('add_products');
});