<?php

include(_DIR_."/../app/Classudo.php");
include(_DIR_."/../app/Http/Controllers/Controller.php");
include(_DIR_."/../app/Http/Controllers/AdminController.php");

$a = new \App\Classudo();
$a->helloworld();

// echo "hello world";

$b = new \App\Http\Controllers\AdminController();
$b->ListAdmins();