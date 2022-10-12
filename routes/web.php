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

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('setlocale/{locale}', function ($lang) {
    \Session::put('locale', $lang);
    return redirect()->back();
});


// All Pages
Route::group(['middleware' => 'language'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/company-profile', 'HomeController@profile')->name('profile');
    Route::get('/financial-partners', 'HomeController@partners')->name('partners');
    Route::get('/dept-distribution', 'HomeController@distribution')->name('distribution');
    Route::get('/dept-distribution-image', 'HomeController@distribution_image')->name('distribution_image');
    Route::get('/corporate-structure', 'HomeController@employee')->name('employee');
    Route::get('/quality-control', 'HomeController@quality_control')->name('quality-control');
    Route::get('/support-functions', 'HomeController@support_functions')->name('support-functions');
    Route::get('/units', 'HomeController@units')->name('units');
    Route::get('/pesticides', 'HomeController@pesticides')->name('pesticides');
    Route::get('/packaging', 'HomeController@packaging')->name('packaging');
    Route::get('/seed', 'HomeController@seed')->name('seed');
    Route::get('/careers', 'HomeController@careers')->name('careers');
    Route::post('/job-application', 'HomeController@apply_now')->name('apply-now');
    Route::get('/contact-us', 'HomeController@contact_us')->name('contact-us');
    Route::post('/send-message', 'HomeController@send_message')->name('send-message');
    Route::get('/order-form', 'HomeController@order')->name('order-form');

    // Product
    Route::get('/product/{id}/{slug}', 'HomeController@products')->name('products');
    Route::resource('/product', 'ProductController');
    Route::get('/product-by-category/{id}', 'ProductController@product_by_cat')->name('product-by-category');
    Route::get('/product-details/{id}/{slug}', 'ProductController@show')->name('product-details');

    // Cart
    Route::post('/add-to-cart', 'CartController@add_to_cart')->name('add-to-cart');
    // view cart item
    Route::get('/shopping-cart', 'CartController@cart_item')->name('shopping-cart');
    // check out page
    Route::get('/check-out', 'CartController@checkout')->name('check-out');
    // update cart
    Route::get('/remove-item/{id}', 'CartController@remove_item')->name('remove-item');
    Route::post('/update-item', 'CartController@update_item')->name('update-item');

    Route::get('/distict-select/{id}', 'CartController@select_district');
    Route::get('/upzila-select/{id}', 'CartController@select_upzila');

    // check user auth
    Route::get('/user-auth-check', 'CartController@user_check')->name('user-check');
    // new customer register
    Route::get('/new-customer', 'CartController@new_customer')->name('new_customer');
    Route::post('/new-customer-checkout', 'CartController@new_customer_checkout')->name('new-customer-checkout');
    // guest check out
    Route::get('/guest-information', 'CartController@guest_info')->name('shipping-info');
    Route::post('/guest-checkout', 'CartController@guest_checkout')->name('guest-checkout');
    Route::get('/order-summary', 'CartController@order_summary')->name('order-summary');
    // login user check out
    Route::post('/user-checkout', 'CartController@user_checkout')->name('user-checkout');
    Route::post('/submit-order', 'CartController@submit_order')->name('submit-order');


    // user register
    Route::get('/user-login', 'CustomerController@login')->name('user.login');
    Route::get('/register', 'CustomerController@create')->name('user.register');
    Route::post('/register-now', 'CustomerController@store')->name('user-signup');

    // User dashboard
    Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
        Route::get('/dashboard', 'CustomerController@dashboard')->name('dashboard');
        Route::get('/edit-profile', 'CustomerController@edit')->name('edit');
        Route::post('/profile-update', 'CustomerController@update_profile')->name('update-info');
        Route::get('/order', 'CustomerController@order')->name('order');
        Route::get('/view-order/{id}', 'CustomerController@show')->name('view-order');
        Route::get('/password', 'CustomerController@password')->name('password');
        Route::post('/update-password', 'CustomerController@passwordUpdate')->name('update-password');
        Route::get('/address', 'CustomerController@address')->name('address');
        Route::post('/update-address', 'CustomerController@updateAddress')->name('address-update');
    });

});


// admin
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    // Dashboard
    Route::resource('dashboard', 'DashboardController');
    // Category
    Route::resource('category', 'CategoryController');
    // Packs Size
    Route::resource('packs_size', 'PackSizeController');
    // Product
    Route::resource('product', 'ProductController');
    // Slider
    Route::resource('slider', 'SliderController');
    // Financial Partner
    Route::resource('partner', 'PartnerController');
    // Employee
    Route::resource('employee', 'EmployeeController');
    // Career
    Route::resource('career', 'CareerController');
    // Contact
    Route::resource('contact', 'ContactController');
    // Orders
    Route::resource('order', 'OrderController');
    // Customer
    Route::resource('customer', 'CustomerController');
    // Product report
    Route::get('/report-product', 'ReportController@product_report_page')->name('product.report');
    Route::get('/product-report-submit', 'ReportController@product_report_submit')->name('product.report.submit');
    // Order report
    Route::get('/report-order', 'ReportController@order_report_page')->name('order.report');
    Route::get('/order-report-submit', 'ReportController@order_report_submit')->name('order.report.submit');
    // Customer report
    Route::get('/report-customer', 'ReportController@customer_report_page')->name('customer.report');
    Route::get('/customer-report-submit', 'ReportController@customer_report_submit')->name('customer.report.submit');
    // Setting
    Route::resource('setting', 'SettingController');
    // Admin profile update
    Route::get('/view-profile', 'ProfileController@index')->name('view-profile');
    Route::post('/update-profile', 'ProfileController@update_profile')->name('update-profile');
    // Change password
    Route::get('/change-password', 'ProfileController@edit')->name('change-password');
    Route::post('/update-password', 'ProfileController@update_password')->name('update-password');
    // crops category
    Route::resource('cropsCat', 'cropsController');
    Route::resource('disorder', 'disorderController');

});


// only for developer
Route::get('clear-all-developer', function () {
    Artisan::call('storage:link');
    // Artisan::call('config:clear');
    // Artisan::call('cache:clear');
    //Artisan::call('route:cache');
    //Artisan::call('view:cache');
    // $demo_pass = Hash::make("Pass1234");

    // return $demo_pass;
    return redirect()->back();
});
