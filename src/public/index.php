<?php
require '../vendor/autoload.php';

use Budi\controllers\UserController;
var_dump(
    class_exists('Budi\controllers\UserController')
);

$user = new UserController;
$user->index();
