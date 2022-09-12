<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
        ]);

        $user_id = Auth::user()->id;

        $note = new Note();
        $note->title = $validated['title'];
        $note->user_id = $user_id;
        $note->save();

        return redirect()->route('cabinet');
    }
}
