<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('note.create');
    }
}
