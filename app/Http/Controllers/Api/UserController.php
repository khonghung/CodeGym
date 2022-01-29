<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAll(){
        try {
            $users = User::all();
            $data = [
            'status' => 'success',
            'users' => $users
            ];
            return response()->json($data);
        }catch (\Exception $exception){
            $data = [
              'status' => 'errors',
              'message' => $exception->getMessage()
            ];
            return response()->json($data);
        }

    }
}
