<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\handeFormController;

Route::get('/', function () {
    return view('index');
});

Route::post('/post-form', [handeFormController::class, 'index']);