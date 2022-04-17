<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('dashboard.signin', [
            'title' => 'Login',
        ]);
    }
    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'min:15'],
            'password' => ['required'],
        ]);

        if($validate['name']=='admin' && $validate['password']== 'admin'){
            return view('dashboard.index');
        }else{
        return back()->with('failed','Your nik or password is incorrect!');
        }
    }

}
