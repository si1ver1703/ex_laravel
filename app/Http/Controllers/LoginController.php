<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        return view('auth');
    }

    public function auth (Request $request) {
        $validated = $request->validate([
            'email' => 'required|min:4|max:20',
            'password' => 'required|min:4|max:16'
        ]);

        if( Auth::attempt($validated, true) ) {
            $request->session()->regenerate();
            return redirect()->route('cabinet');
        }
        else{
            $request->flash();
            return back()->withErrors('Такой пользователь не найден');
        }
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
