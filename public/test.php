<?php

<<<<<<< HEAD
include(_DIR_."/../app/Classudo.php");
include(_DIR_."/../app/Http/Controllers/Controller.php");
include(_DIR_."/../app/Http/Controllers/AdminController.php");
=======
include(__DIR__."/../app/Classudo.php");
include(__DIR__."/../app/Http/Controllers/Controller.php");
include(__DIR__."/../app/Http/Controllers/AdminController.php");
>>>>>>> bbeaf1aafffdcb93a0a294ab38acd2b5ebe38292

$a = new \App\Classudo();
$a->helloworld();

// echo "hello world";

$b = new \App\Http\Controllers\AdminController();
$b->ListAdmins();