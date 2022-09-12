<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;

class ShowController extends Controller
{
    public function __invoke(Message $message)
    {
        return view('message.show', compact('message'));
    }
}
