<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Eloquent Laravel Database with Model
     * @param entrada string , asasdas;
     * @return  result , querry result with a list of User
     */
    public function ListUser()
    {

        $users = User::all();

        return $users;
    }
}
