<?php


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule() ;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'gitstar',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
	// 'strict'    => true,

]);



$capsule->setAsGlobal();  //this is important
$capsule->bootEloquent();
















?>