<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('message.create');
    }
}
