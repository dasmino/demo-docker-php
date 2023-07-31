<?php

require "bootstrap.php";

var_dump($_ENV['S3_BUCKET']);die;

$user = User::find(1);
$user->update([
   'name' => 'vu long 1'
]);
var_dump($user->toArray());

// $user = User::Create(['name' => "Ahmed Khan",    'email' => "ahmed.khan@lbs.com",    'password' => password_hash("ahmedkhan",PASSWORD_BCRYPT), ]);

// print_r($user->todo()->create([

//    'todo' => "Working with Eloquent Without PHP",

//    'category' => "eloquent",

//    'description' => "Testing the work using eloquent without laravel"

//    ]));