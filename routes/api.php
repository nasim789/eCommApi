<?php

use Illuminate\Http\Request;
// // Display all SQL executed in Eloquent
// \Event::listen('illuminate.query', function($query)
// {
//     var_dump($query);
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Product routes
Route::apiResource('/products', 'ProductController');
// Reviews routes
Route::group(['prefix' => 'products'], function(){
    Route::apiResource('/{product}/reviews', 'ReviewController');
});
