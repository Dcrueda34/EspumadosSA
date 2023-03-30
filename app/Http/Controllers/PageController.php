<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate();

        return view('welcome', compact('users'));
    }
}
