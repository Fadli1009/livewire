<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index($id)
    {
        $users = User::where('id', $id)->first();
        return view('users.show', [
            'user' => $users
        ]);
    }
}