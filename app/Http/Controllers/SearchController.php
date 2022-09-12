<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $title = $request['title'];

        $notes = Note::where('title', 'LIKE', '%'.$title.'%')
            ->get();

        return view('search', compact('notes', 'title'));
    }
}
