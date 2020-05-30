<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize(Auth::user());

        return view('user.index', ['users' => User::all()]);
    }

    /**
     * Promote specific user to admin
     * 
     * @return \Illuminate\Http\Response
     */
    public function promote($id)
    {
        User::find($id)->promote();

        return redirect()->back();
    }

    /**
     * Demote specific user to admin
     * 
     * @return \Illuminate\Http\Response
     */
    public function demote($id)
    {
        User::find($id)->demote();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        $this->authorize('view', $user);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->authorize($user);

        return view('user.edit', compact('user'));
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
        $user = User::findOrFail($id);

        $this->authorize($user);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('home');
    }
}
