<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function formlog()
    {
        return view('users.formLog');
    }
    public function formreg()
    {
        return view('users.formReg');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        User::create($validated);

    }
}
