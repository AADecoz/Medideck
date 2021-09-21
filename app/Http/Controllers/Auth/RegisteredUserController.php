<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Sender;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
//use App\Http\Controllers\Auth\Validator;
use Illuminate\Support\Facades\Validator;
use App\Events\LoginHistory;
//use App\User;

class RegisteredUserController extends Controller
{


    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sender = DB::table('senders')->get();
        return view('auth.register', compact('sender'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'sender_id' => ['numeric'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        Validator::make($request->all(), [
            'sender_id' => 'required_if:role_id,5'
        ]);


        $user = User::create([
            'sender_id' => $request->sender_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole($request->role_id);


        event(new Registered($user));

        Auth::login($user);

        $user = Auth::user();
        event(new LoginHistory($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
