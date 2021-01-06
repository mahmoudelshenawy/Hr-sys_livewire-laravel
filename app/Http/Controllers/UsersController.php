<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->latest()->paginate(100);
        return view('users.index', ['users' => $users]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
            'permissions' => 'required|min:1'
        ]);

        $request_all = request()->except(['permissions', 'password', 'role']);
        $request_all['password'] = bcrypt($request->password);
        $user = User::create($request_all);
        $user->attachRole($request->role);
        $user->syncPermissions($request->permissions);
        session()->flash('success', 'new user is added');
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6',
            'role' => 'required',
            'permissions' => 'required|min:1'
        ]);
        $user = User::findOrFail($id);
        $request_all = request()->except(['permissions', 'password', 'role']);
        if (request()->has('password')) {
            $request_all['password'] = bcrypt($request->password);
        } else if (request()->has('role')) {
            $user->detachRole($user->role);
            $user->attachRole($request->role);
        } else {
            $request_all['password'] = $user->password;
        }
        $user->update($request_all);
        $user->syncPermissions($request->permissions);

        session()->flash('success', 'new user is added');

        return redirect()->back();
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
