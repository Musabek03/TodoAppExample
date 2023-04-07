<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('login', [\App\Http\Controllers\UserController::class,"create"]);
