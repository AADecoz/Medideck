<?php

namespace App\Http\Controllers;

use App\Models\Indication;
use App\Models\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('superadministrator')){
            return view('dashboard');
        } elseif (Auth::user()->hasRole('administrator')){
            return view('dashboard');
        } elseif (Auth::user()->hasRole('moderator')) {
            return view('moddash');
        } elseif (Auth::user()->hasRole('target')){
            return view('specdash');
        } elseif (Auth::user()->hasRole('user')){
            return view('userdash');
        }
    }

    public function myprofile(){
        return view('myprofile');
    }

    public function usermanagement(){
//      $subscription = Subcription::all();
        $sender = Sender::all();
        $user = User::all();
        return view('usermanagement', compact('user', 'sender'));
    }

    public function companymanagement(){
        $sender = Sender::all();
        $user = User::all();
        return view('companymanagement', compact('user', 'sender'));
    }

    public function main(){
        return view('main');
    }

    public function eventscope(){
        return view('eventscope');
    }

    public function dmscope(){
        $indication = Indication::all();
        return view('dmscope', compact('indication'));
    }

    public function myentries(){
       return view('myentries');
    }
//    public function single(){
//        return view('');
//    }
}
