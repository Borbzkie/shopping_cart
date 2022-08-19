<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{   
    public function me(Request $request) {
        return  response()->json(['data' => $request->user()]);
    }
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
        
        if (!auth()->attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email'=> "invalid email"
            ]);
        }
       
    
        $request->session()->regenerate();
        return response()->json(null, 201);

    
        // $data = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        
        //  $user = User::where('email', $data['email'])->first();


        // if (!isset($user->id) && Hash::check($data['password'], $user->password)) {

        //     return response()->json([
        //         'status' =>  0,
        //         'message' => "User not found"
        //     ],401); // 401 = unauthorized user
        // } 

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json([
        //     'status' => 1,
        //     'message' => "User succesfully login",
        //     'access_token' => $token,
        //     'type' => "bearer"
        // ]);



    }

}
