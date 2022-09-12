<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;

class EditController extends Controller
{
    public function __invoke(Note $note)
    {
        return view('note.edit', compact('note'));
    }
}
