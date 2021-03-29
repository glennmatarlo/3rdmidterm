<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        
    public function index()
    {
        return User::all();
    }


    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function show($user)
    {
        return User::find($user);
    }

    public function update(Request $request, $user)
    {
      $user = User::find($user);
      $user->update($request->all());

      return $user;
    }

    public function destroy($user)
    {
        return User::destroy($user);
    }

    public function byUser(User $user){
        return User::with('product','orders')->where('id', $user->id)->get();
    }
}
