<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function loginApi(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt($incomingFields)) {
            $user = User::where('name', $incomingFields['name'])->first();
            $token = $user->createToken('appToken')->plainTextToken;
            return $token;
        } else {
            return response([
                'message' => 'Invalid credentials'
            ], 401);
        }
    }


    public function log(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'password' => ['required', 'min:5', 'max:20']
        ]);
        if (auth()->attempt(['name' => $incomingFields['name'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            return redirect()->route('product.index');
        } else {
            return redirect()->back();
        }
    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20', Rule::unique('users', 'name')],
            'email' => 'required', Rule::unique('users', 'email'),
            'password' => ['required', 'min:5', 'max:20', 'confirmed']
        ]);
        User::create($incomingFields);
        return redirect('/login');
    }
}
