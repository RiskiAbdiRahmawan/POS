<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function About()
    {
        return view('UserView')
            ->with('name','Ryuu')
            ->with('id','12345');
    }
}
