<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Eloquent Laravel Database with Model
     * @param entrada string , asasdas;
     * @return  result , querry result with a list of User
     */
    public function ListUser()
    {

        $members = Member::all();

        return $members;
    }
}
