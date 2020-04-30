<?php

use Illuminate\Support\ServiceProvider;

namespace App\Models;

echo "adicionando admin";

 $admin = new Admin;
 $admin->id = $request->id ;
 $admin->email = $request->email;
 $admin->nome= $request->nome;
 $admin->senha = $request->senha;
 $admin->save();