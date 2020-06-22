<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AdminResource;
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

        return new AdmimResource([
            'admins' => $admins
        ]);

    }
 
    public function deleteAdmin(DeleteFormRequest $request){
        $admin_number = Admin::count();
        if($admin_number >= 2){
            $model = Admin::where('email',$request->email);
        }else{
            return faio
        }
    }

    public function insert(Request $str){
        
        $admin = new Admin;
        $admin->email = $str->email;
        $admin->name =$str->name;
        $admin->password =$str->password;
        $admin->save();

        //print_r($str->input('id'));

        return "oi deu certo";
		
	}

}

/*public function store(Request $request)
{
    // Validate the request...

    $flight = new Flight;

    $flight->name = $request->name;

    $flight->save();
}*/