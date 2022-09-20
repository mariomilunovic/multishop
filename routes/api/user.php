<?php

use App\Http\Controllers\Api\UserController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/user',UserController::class);

