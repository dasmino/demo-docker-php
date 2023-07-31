<?php
require "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$capsule = new Capsule;
$capsule->addConnection([
   "driver" => "mysql",
   "host" =>"127.0.0.1",
   "database" => "test",
   "username" => "root",
   "password" => ""
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();