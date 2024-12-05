<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function getMessage()
    {
        return response()->json([
            'message' => 'ME cago en tu puta madre!'
        ]);
    }
}