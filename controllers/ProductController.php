<?php
include "models/Category.php";
class ProductController {
    private $productModel;
    private $categoryModel;
    private $categories = [];
    public function __construct() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?route=login');
            exit;
        }

        if($_SESSION['user']['role'] !== 'admin'){
            require "views/error/403.php";
            die();
        }
        $this->productModel = new Product();
        $this->categoryModel = new Category();
        $this->categories = $this->categoryModel->getAllCategories();
    }

    public function dashboard() {
        $products = $this->productModel->getAllProducts();
        $categories = $this->categories;
        require 'views/dashboard.php';
    }

    public function create() {
        $categories = $this->categories;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_product'])) {
            // upload ảnh
            if(!empty($_FILES['image']['name'])){
                $check = getimagesize($_FILES['image']['tmp_name']);
                if($check!== false){
                    $target_file = "public/images/" . basename($_FILES["image"]["name"]);
                    $target_source = $_FILES['image']['tmp_name'];
                    $result = move_uploaded_file($target_source, $target_file);
                    if($result){
                        $_POST['image_name'] = basename($_FILES["image"]["name"]);
                        $this->productModel->createProduct($_POST);
                        header('Location: index.php?route=dashboard');
                    } else {
                        die("Error uploading image.");
                    }
                }
            }
        }
        require 'views/product/create.php';
    }

    public function edit() {
        $categories = $this->categories;
        $product = $this->productModel->getProductById($_GET['id']);
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_product'])) {
            // check if upload ảnh
            if(!empty($_FILES['image']['name'])){
                $check = getimagesize($_FILES['image']['tmp_name']);
                if($check!== false){
                    $target_file = "images/" . basename($_FILES["image"]["name"]);
                    $target_source = $_FILES['image']['tmp_name'];
                    $result = move_uploaded_file($target_source, $target_file);
                    if($result){
                        $_POST['image_name'] = basename($_FILES["image"]["name"]);
                    } else {
                        die("Error uploading image.");
                    }
                }

            }
            $this->productModel->updateProduct($_POST['id'], $_POST);
            header('Location: index.php?route=dashboard');
        }
        require 'views/product/edit.php';
    }

    public function delete() {
        $this->productModel->deleteProduct($_GET['id']);
        header('Location: index.php?route=dashboard');
    }
}