<?php 

require '../vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
Dotenv\Dotenv::createImmutable(__DIR__.'./../')->load();

$stripeSecretKey = $_ENV['S3_BUCKET'];
echo $stripeSecretKey;die;
// $dotenv->load();


echo  getenv('S3_BUCKET');die;

var_dump($s3_bucket);die;

var_dump($s3_bucket);die;
var_dump(var_dump(getenv('PATH1')));die;
// echo phpinfo();die;
session_start();

$_SESSION['test'] = 'test1234';

header("Location : login.php");