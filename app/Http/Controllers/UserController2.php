<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController2 extends Controller
{
    public function profile($id, $name)
    {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}

