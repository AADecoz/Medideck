<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use voku\helper\ASCII;
use Illuminate\Support\Facades\DB;
use App\Models\Sender;
use App\Models\User;

class SenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sender = DB::table('senders')->get();
        return view('/register', compact('sender'));
    }

//    public function management(){
//        $sender = DB::table('sender')->get('sender_name')->where('sender_id', $user->sender_id);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sender = Sender::all('sender_id', 'sender_name');
        return view('test', compact('sender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'sender' => 'max:128'
        ]);
        $sender = Sender::create($storeData);

        return redirect('/register')->with('completed', 'sender registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
