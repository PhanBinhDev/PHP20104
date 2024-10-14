<?php
class CategoryController {
    private $categoryModel;
    public function __construct() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?route=login');
            exit;
        }

        if($_SESSION['user']['role'] !== 'admin'){
            require "views/error/403.php";
            die();
        }
        $this->categoryModel = new Category();
    }

    public function dashboard() {
        $categories = $this->categoryModel->getAllCategories();
        require 'views/dashboard.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->categoryModel->createCategory($_POST);
            header('Location: index.php?route=dashboard');
        }
        require 'views/category/create.php';
    }

    public function edit() {
        $category = $this->categoryModel->getCategoryById($_GET['id']);
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_category'])) {
            $this->categoryModel->updateCategory($_GET['id'], $_POST);
            header('Location: index.php?route=dashboard');
        }
        require 'views/category/edit.php';
    }

    public function delete() {
        $this->categoryModel->deleteCategory($_GET['id']);
        header('Location: index.php?route=dashboard');
    }
}