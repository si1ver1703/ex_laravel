<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function show()
    {

        $notes = Auth::user()->notes;

        return view('cabinet', compact('notes'));
    }
}
