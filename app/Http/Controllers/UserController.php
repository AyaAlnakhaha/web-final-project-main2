<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function register(StoreUserRequest $request)
    {

        $validated = $request->validated();

        User::creating(function ($user){
            $user->password = bcrypt($user->password);
        });
        $user = User::create($validated);


        return response()->json([
            'message' => 'User created successfuly',
            'data' => new UserResource($user),
            'token' => $user ->createToken('MyApp')->plainTextToken,
        ],201);

    }


    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' =>'required',
            'password' => 'required',
        ]);

        $user = User::where('email',$validated['email'])->first();

        if (!$user){
            return response()->json([
                'message' => 'User not found',
            ],404);
        }

        if (!Hash::check ($validated['password'], $user ->password)){
            return response()->json([
                'message' => 'Password is incorrect',
            ], 401);
        }

        return response()->json([
            'message' => 'User created successfuly',
            'data' => new UserResource($user),
            'token' => $user ->createToken('MyApp')->plainTextToken,
        ],201);

    }

    public function getAccountProfile(Request $request){

        return response()->json([
            'message' => ' profile successfuly',
            'user'=>new UserResource($request->user('sanctum'))
        ],201);


    }

    public function change(Request $request)
    {
        $user = Auth::user();
        if ($request->user_name) {
            $user->update(['name' => $request->user_name]);
        }

        if ($request->password) {
            $user->update(['password' => $request->password]);
        }
        if ($request->phone) {
            $user->update(['phone' => $request->phone]);
        }

        return response()->json([
            'message' => ' profile successfuly',
            'user'=>new UserResource($request->user('sanctum'))
        ],201);



    }

    public  function changeEmail(Request $request)
    {
        $confirm = $request->confirm_email;
        $new_email = $request->new_email;
        $validator = Validator::make($request->all(), [

            'new_email' => 'required|email',
            'confirm_email' => 'required|email|same:new_email'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
//                'data' => [$validator->errors()]
            ], 422);
        }
//    if ($confirm==$new_email)
//    {
        Auth::user()->update(['email' => $new_email]);
        return response()->json([
            'message' => 'password successfully updated ',
            'user' => UserResource::make(Auth::user()),

        ], 200);
    }
//    }
//    else
//    {
//        return response()->json([
//            'message' => 'confirm email do not matched'
//        ], 400);
//
//    }
//
//}


}
