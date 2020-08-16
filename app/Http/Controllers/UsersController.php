<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{

//    public function findUser(Request $request,$id)
//    {
//        $theUser = User::whereIn('id', $request->id)->get();
//
//        return Response::json($theUser);
//    }
//    public function getUserById(Request $request){
//        $id =$request->input('id');
//        $user =  User::find($id);
//        return $user;
//    }
}
