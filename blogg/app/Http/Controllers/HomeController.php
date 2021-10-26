<?php

namespace App\Http\Controllers;

use App\Http\Requests\Newslatter\SubscriptionFormRequest;
use App\Mail\UserActivationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        // Mail::to('dana@belajarlaravel.test')->send(new UserActivationMail());

        return new UserActivationMail();
    }

    public function other()
    {
        return 'Other Route';
    }

    public function store(SubscriptionFormRequest $request)
    {
        // dd('Berhasil Langganan');
        return redirect()->route('other');
    }
}
