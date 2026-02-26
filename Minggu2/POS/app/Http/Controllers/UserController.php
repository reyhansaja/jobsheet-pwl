<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile(string $id, string $name)
    {
        return view('user.profile', [
            'id' => $id,
            'name' => $name,
        ]);
    }
}
