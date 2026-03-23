<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($id)
    {
        return view ('about', ['name' => 'User '.$id]);
    }

    public function profile () {
return 'Profile page';
    }
}
