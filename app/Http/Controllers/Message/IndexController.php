<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;


class IndexController extends Controller
{
    public function __invoke()
    {
        $messages = Message::all();
        return view('show', compact('messages'));
    }
}
