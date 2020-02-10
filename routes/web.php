<?php

//BEGIN: Dashboard Area
 // Route::get('/v1/dashboard','DashboardController@index')->name('dashboard_index');
 Route::get('/v1/dashboard','OrderController@index')->name('dashboard_index');


 // Order Tesk Starts Here

 Route::get('/v1/dashboard/total/order','OrderController@totalorder')->name('totalorder');
 Route::get('/v1/dashboard/new/order','OrderController@neworder')->name('neworder');

 Route::get('/v1/dashboard/pending/order','OrderController@pendingorder')->name('pendingorder');
 Route::get('/v1/dashboard/followup/order','OrderController@followuporder')->name('followuporder');
 Route::get('/v1/dashboard/confirmed/order','OrderController@confirmedorder')->name('confirmedorder');
 Route::get('/v1/dashboard/canceled/order','OrderController@canceledorder')->name('canceledorder');

 Route::get('/v1/dashboard/cash/on/delivery/order','OrderController@cash')->name('cash');
 Route::get('/v1/dashboard/advanced/payment/order','OrderController@advanced')->name('advanced');

 Route::get('/change/action/status/{id}/{action}','OrderController@changeactionstatus')->name('changeactionstatus');

 // Search orders
 Route::post('/searchOrder','OrderController@searchOrder')->name('searchOrder');
 // Route::get('/v1/dashboard/order/search/result','OrderController@orderSearchResult')->name('orderSearchResult');

 // Order Tesk Ends Here





 // BEGIN:product_list
 Route::get('/v1/dashboard/product/list','DashboardController@product_list')->name('product_list');
 // END:product_list

// BEGIN:Product
// add_product
Route::get('/v1/dashboard/add/product','DashboardController@add_product')->name('add_product');
// END:Product

// BEGIN:CategoryController
Route::post('/v1/dashboard/add/category/create','CategoryController@cat_create')->name('cat_create');
// END:CategoryController


Route::post('/v1/dashboard/add/sub/category/create','CategoryController@sub_cat_create')->name('sub_cat_create');
Route::post('/get/subcategory','CategoryController@get_subcategory')->name('get_subcategory');


// BEGIN:ProdcutController
Route::post('/v1/dashboard/add/product/create','ProductController@create')->name('product_create');

// product_trash
Route::get('/v1/dashboard/trash/product/{product_id}/{slug}','ProductController@product_trash')->name('product_trash');
// END:ProdcutController




// END: Dashboard Area



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
