<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function storerole(RolesRequest $request)
    {
        $role= new Role();
        $role->name=$request->name;
        $role->slug=$request->slug;

        //$role->save();
        //$request->session()->flash('status', 'Blog post was updated!');
        $role_save= $role->save();


        if($role_save){
            $response=HelperFunctionResponse::createAPIResponse(false,201,'Role added successfully',null);
            return response()->json($response,201);
        }else{
            $response=HelperFunctionResponse::createAPIResponse(true,400,'Role creation failed',null);
            return response()->json($response,400);
        }
    }
}
