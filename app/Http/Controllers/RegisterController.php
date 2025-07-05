<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view ('Admin.create', [
            'title' => 'Create Admin Page',
        ]);
    }

    // public function update()
    // {
    //     return view ('Admin.create', [
    //         'title' => 'Update Admin Page',
    //     ]);
    // }
}
