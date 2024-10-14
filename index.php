<?php
require_once 'config/database.php';
require_once 'config/routes.php';
session_start();

$route = $_GET['route'] ?? 'home';
$routes[$route]();