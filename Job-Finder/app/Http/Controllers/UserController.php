<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
class UserController extends Controller
{
    public function index()
    {
    $users = User::all();

    return response()->json([
        'results' => $users
    ], 200);
    }
    public function update(UserStoreRequest $request, $id){
        try
        {
        $user = User::find($id);

            if(!$user){
                return response()->json([
                    'message'=> 'user not found'
                ]);
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return response()->json([
                'message'=> 'User Update Successfully'
            ]);
        }catch (\Exception $e){
           return response()->json([
               'message'=> 'Something went wrong!!!'
           ],500);
        }
    }
    public function store(UserStoreRequest $request){
     try
     {
    User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> $request->password
]);
     return response()->json([
        'message'=> 'Create User Successfully'

],200);
     }catch (\Exception $e){
        return response()->json([
            'message'=> 'Something went wrong!!!'
        ],500);
     }
     }

    public function show($id){
        $user = User::find($id);
        if(!$user){
            return response()->json([
                'message'=> 'user not found'
            ]);
        }
        return response()->json([
        'user'=> $user
        ],200);
    }
    public function destroy($id){
        $user = User::find($id);

        if(!$user){
            return response()->json([
                'message'=> 'user not found'
            ]);
        }
        $user->delete();
        return response()->json([
            'message'=> 'User Deleted Successfully'
        ]);
    }
}
