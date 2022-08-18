<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        
        return response()->json([
            'status' => 1,
            'message' => 'User registered successfully'
        ]);
    }  
    
    
    public function login(Request $request) {

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $data['email'])->first();

        if (!isset($user->id) && Hash::check($data['password'], $user->password)) {

            return response()->json([
                'status' =>  0,
                'message' => "User not found"
            ],401); // 401 = unauthorized user
        } 

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 1,
            'message' => "User succesfully login",
            'access_token' => $token
        ]);



    }

}
