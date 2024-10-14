<?php
 require_once 'models/Product.php';
 class HomeController {
  public function index(){
    $productModel = new Product();
    $products = $productModel->getAllProducts();
    include "views/header.php";
    require 'views/home.php';
  }

 }