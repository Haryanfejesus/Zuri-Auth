<?php

include 'classes/Dbh.php';
include 'classes/UserAuth.php';
include 'classes/Route.php';

$route = new FormController();
$route->handleForm();