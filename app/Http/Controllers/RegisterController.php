<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    protected function create(array $data)
    {
    	return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $bcrypt($data['passthru(command)']),
    		]);
    	$memberRole = Role::where('name','member')->first();
    	$user->attachRole($memberRole);
    	return $user;
    }
}
