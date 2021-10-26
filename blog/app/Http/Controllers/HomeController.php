<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::active()->ageGreaterThan(15)->get();

        dd($user);
        // return $user->getFirstNameOrUsername();
    }

    public function show(User $user)
    {

        dd($user);
    }
}
