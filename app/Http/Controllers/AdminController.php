<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Eloquent Laravel Database with Model
     * @return  result , querry result with a list of Admins
     */
    public function listAdmins()
    {

        $admins = Admin::all();

        return $admins;
    }

    public function teste(){
        return "oi";
    }

    public function printatela($str){
		echo "$str";
		return $str;
    }
    
    public function deleteAdmin(DeleteFormRequest $request){
        $admin_number = Admin::count();
        if($admin_number >= 2){

        }else{
            return faio
        }
    }

}