<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;

class CustomerAuthController extends Controller
{
	
	public $loginAfterSignUp = true;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'phone_number' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
        ]);

        if($validator->fails()) 
        {
            return response()->json($validator->messages(), 200);
        }

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->phone_number),
            'address' => $request->address,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
        ]);

        $token = auth()->login($customer);

        return $this->respondWithToken($token);
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['name', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function getAuthUser(Request $request)
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message'=>'Successfully logged out']);
    }
    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL()
        ]);
    }
}
