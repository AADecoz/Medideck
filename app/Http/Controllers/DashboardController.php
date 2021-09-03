<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('superadministrator')){
            return view('dashboard');
        } elseif (Auth::user()->hasRole('administrator')){
            return view('dashboard');
        } elseif (Auth::user()->hasRole('moderator')){
            return view('moddash');
        } elseif (Auth::user()->hasRole('user')){
            return view('userdash');
        }
    }

    public function myprofile(){
        return view('myprofile');
    }

    public function usermanagement(){

        $user = User::all();
        return view('usermanagement', compact('user'));
    }
}