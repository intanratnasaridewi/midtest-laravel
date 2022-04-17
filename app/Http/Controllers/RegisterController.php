<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index(){

        return view('userpage.signup', [
            'title' => 'register',
        ]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'min:15'],
            'password' => ['required'],
        ]);
        // $validate['password']=Hash::make($validateData['password']);
        $validate['password'] = Hash::make($request->password);
        User::create($validate);
        return redirect('/login')->with('success', 'Success for register! Login now!!');
    }
}
