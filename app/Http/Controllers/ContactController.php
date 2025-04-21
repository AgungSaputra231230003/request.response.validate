<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required | string | max:100',
            'email' => 'required | email | unique:users,email',
            'noHp' => 'required | min:12',
            'message' => 'required'
        ]);
        contact::create($request -> all());
        return redirect()->back()->with('success', 'contact anda telah berhasil do tambahkan ke database');
    }
}
