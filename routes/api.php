<?php

use App\Http\Controllers\API\MessageController;

Route::get('/mensaje', [MessageController::class, 'getMessage']);
