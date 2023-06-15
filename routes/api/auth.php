<?php

use App\Http\Controllers\Auth\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::post('create-user', CreateUserController::class);