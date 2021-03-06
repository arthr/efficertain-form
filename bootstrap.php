<?php
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
// $capsule->addConnection([
//     "driver" => "mysql",
//     "host" => "mysql785.umbler.com",
//     "port" => "41890",
//     "database" => "efficertain",
//     "username" => "arthr",
//     "password" => "3ff1c3rt41n",
// ]);
$capsule->addConnection([
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "database" => "efficertain",
    "username" => "root",
    "password" => "root",
]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
