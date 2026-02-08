<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function login()
    {
        if (session()->has('admin_id')) {
            return redirect()->route('dashboard.index');
        }

        return view('login');
    }

    public function attempLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = User::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // simpan ke session manual
            Session::put('admin_id', $admin->id);
            Session::put('admin_username', $admin->username);

            return redirect()->route('dashboard.index');;
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
