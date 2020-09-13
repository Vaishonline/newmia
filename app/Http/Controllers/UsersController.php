<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(UserRequest $request)
    {
        $user= new User();
        $user->first_name=$request->first_name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=$request->password;
        $user->last_name=$request->last_name;
        $user->slug=$request->slug;
        $user->remember_token=$request->remember_token;

        $user->token=$request->token;
        $user->phone_verified_at='2020-09-12 17:05:42';
        $user->profile_pic=$request->profile_pic;
        //$validatedData = $request->validated();

        //$user->fill($validatedData);
        $user->save();
        //$request->session()->flash('status', 'Blog post was updated!');
        $user_save= $user->save();


        if($user_save){
            $response=HelperFunctionResponse::createAPIResponse(false,201,'User added successfully',null);
            return response()->json($response,201);
        }else{
            $response=HelperFunctionResponse::createAPIResponse(true,400,'User creation failed',null);
            return response()->json($response,400);
        }
    }
}
