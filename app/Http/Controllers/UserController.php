<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
       public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // CREATE FORM
    public function create()
    {
        return view('users.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/users');
    }

    // EDIT FORM
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/users');
    }

    // DELETE
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/users');
    }
}
