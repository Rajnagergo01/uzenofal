<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uzenofalController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view("role-page", ["role" => $user->role->name]);
    }
}
