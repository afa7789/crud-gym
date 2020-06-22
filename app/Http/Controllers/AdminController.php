<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AdminResource;
use App\Http\Requests\DeleteAdminFormRequest;
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
            'success'   => true,
            'message' => 'listing Admins',
            'admins' => $admins
        ]);

    }
 
    public function deleteAdmin(DeleteAdminFormRequest $request){
        $admin_number = Admin::count();
        if($admin_number >= 2){
            $delete_result = Admin::where('email',$request->email)->delete(); // Deve retornar um número;
            if($delete_result > 0){
                return new AdmimResource([
                    'success'   => true,
                    'message' => 'Admin with '.$request->email.' was deleted'
                ]);
            }
        }else{
            return new AdmimResource([
                'success'   => false,
                'message' => 'Can\'t remove Admins , there is only one left'
            ]);
        }
    }

    public function insert(Request $str){
        
        print_r($str->input('id'));

        return "oi deu certo";
		
	}

}