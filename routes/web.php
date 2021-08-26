<?php

use Illuminate\Support\Facades\Route;

Route::get('/sellers/latest', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\SellerController@latest'
]);

Route::get('/seller/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\SellerController@id'
]);

Route::get('/seller/key/{key}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\SellerController@key'
]);
