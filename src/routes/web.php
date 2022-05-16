<?php

use Samueletur\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Samueletur\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);
