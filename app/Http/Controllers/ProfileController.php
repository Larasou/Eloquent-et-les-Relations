<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index() {
        return view('members', [
            'users' => User::all(),
            'profiles' => Profile::all()
        ]);
    }
    
    public function show(User $user)
    {
        return view('profile', ['user' => $user]);
    }
}
