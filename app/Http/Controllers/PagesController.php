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
        $user = Auth::user();
        if(Auth::user()->hasRole('applicant')) {
            return view('pages.applicant-dashboard', compact('user'));
        }
        elseif (Auth::user()->hasRole('restaurant')){
            return view('pages.home', compact('user'));
        }
        else
            return redirect('auth/login');
    }
}
