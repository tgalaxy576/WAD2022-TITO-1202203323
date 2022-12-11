<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function store(Request $request)
    {
        Register::create([
            'email'->$request->email,
            'name'->$request->name,
            'no_hp'->$request->no_hp,
            'password'->$request->password,

        ]);

        return redirect('register')->with('success', 'Berhasil Register');
    }

}