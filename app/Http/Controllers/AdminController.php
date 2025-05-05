<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required | string | max:100',
            'email' => 'required | email | unique:users,email',
            'noHp' => 'required | min:12 | numeric',
            'alamat' => 'required',
            'role' => 'required | in:super_admin,kasir'
        ]);
        // admin::create($request -> all());
        return redirect()->back()->with('success', 'data admin anda telah berhasil di tambahkan ke database');
    }
}
