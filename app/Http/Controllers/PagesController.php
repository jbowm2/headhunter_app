<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        if(Auth::check()) {
            return view('pages.home');
        }
        else
            return redirect('auth/login');
    }
}
