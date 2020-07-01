<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AdminResource;
use App\Http\Requests\DeleteAdminFormRequest;
use App\Http\Requests\InsertAdminFormRequest;
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

        return new AdminResource([
            'success'   => true,
            'message' => 'Listing Admins',
            'admins' => $admins
        ]);
    }

    public function deleteAdmin(DeleteAdminFormRequest $request)
    {
        $admin_number = Admin::count();
        if ($admin_number >= 2) {
            $delete_result = Admin::where('email', $request->email)->delete(); // Deve retornar um número;
            if ($delete_result > 0) {
                return new AdminResource([
                    'success'   => true,
                    'message' => 'Admin with  was deleted',
                    'email' => $request->email
                ]);
            }
        } else {
            return new AdminResource([
                'success'   => false,
                'message' => 'Can\'t remove Admins , there is only one left',
                'email' => $request->email
            ]);
        }
    }

    public function insert(InsertAdminFormRequest $request)
    {
        $admin = new Admin;
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->password = $request->password;
        \Log::info($admin);

        try {
            $saved  = $admin->save();
        } catch (\Illuminate\Database\QueryException $e) {
            return new AdminResource([
                'success'   => false,
                'message' => 'ERROR',
                'exception' => $e
            ]);
        }


        if ($saved) {
            return new AdminResource([
                'success'   => true,
                'message' => 'the admin has been add successfully',
                'admin' => $admin
            ]);
        } else {
            return new AdminResource([
                'success'   => false,
                'message' => 'ERRO 500',
            ]);
        }
    }
}

    

/*

$saved = $myModel->save();

if(!$saved){
    App::abort(500, 'Error');
}


public function store(Request $request)
{
    // Validate the request...

    $flight = new Flight;

    $flight->name = $request->name;

    $flight->save();



}*/

/*print_r($request->input('email'));
        print_r($request->input('name'));
        print_r($request->input('password'));*/
