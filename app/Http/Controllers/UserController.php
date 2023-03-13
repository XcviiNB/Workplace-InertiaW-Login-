<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::latest('id')->get();

        return inertia('Users/Index', compact('users'));
    }

    public function create() {
        return inertia('Users/Create');
    }

    public function store(Request $request) {
        $request->validate([
            'username'=>'required',
            'fullname'=>'required',
            'designation'=>'required',
            'department'=>'required',
            'password' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'designation' => $request->designation,
            'department' => $request->department,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/users')->with('Info','A new user has been created.');
    }

    public function edit(User $user) {
        return inertia('Users.Edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user) {
        $editFields = $request->validate([
            'username'      => 'required|unique:users,username',
            'fullname'      => 'required|unique:users,fullname',
            'designation'   => 'required',
            'department'    =>  'required'
        ]);

        $user->update($editFields);

        return redirect('/users');
    }
}
