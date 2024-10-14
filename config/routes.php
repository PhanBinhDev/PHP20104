<?php 
require_once 'controllers/HomeController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/CategoryController.php';

 $routes = [
  'home' => function(){(new HomeController())->index();},
  'login' => function(){(new AuthController())->login();},
  'logout' => function() { (new AuthController())->logout(); },
  'dashboard' => function() { (new ProductController())->dashboard(); },
  'product/create' => function() { (new ProductController())->create(); },
  'product/edit' => function() { (new ProductController())->edit(); },
  'product/delete' => function() { (new ProductController())->delete(); },
  // Category
  'category/create' => function() { (new CategoryController())->create(); },
  'category/edit' => function() { (new CategoryController())->edit(); },
  'category/delete' => function() { (new CategoryController())->delete(); },
 ];