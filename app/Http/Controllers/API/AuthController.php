<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('auth_token')->plainTextToken;
            return response()->json([
                'status' => 'success',
                'token' => $token,
            ],200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'handphone' => ['required', 'numeric', 'min:9'],
            'foto' => ['required', 'image', 'size:512'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'handphone' => $data['handphone'],
            'foto' => '',
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fotoName = uniqid() . '_' . time() . '.' . $extension;
            $request->file('foto')->storeAs('UserPic/', $fotoName);
            $user->update(['foto' => $fotoName]);
        }

        $user->assignRole('user');

        return response()->json([
            'status' => 'success',
            'user' => $user,
        ]);
    }
    public function logout()
    {
        if (auth()->check()) {
            auth()->user()->tokens()->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully logged out',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Unauthorized',
        ], 401);
    }
}
