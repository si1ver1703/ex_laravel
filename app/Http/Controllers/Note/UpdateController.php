<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use http\Env\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Note $note)
    {
        $validated = $request->validate([
            'title' => 'required|string',
        ]);

        $note->update($validated['title']);


        return redirect()->route('cabinet');
    }
}
