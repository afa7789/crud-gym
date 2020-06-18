<?php

include(__DIR__."/../app/Classudo.php");
include(__DIR__."/../app/Http/AdminController.php");

$a = new \App\Classudo();
$a->helloworld();

// echo "hello world";

$b = new \App\Http\Controllers\AdminController();
$b->ListAdmins();