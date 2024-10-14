<?php
require_once 'models/User.php';
class AuthController {
    public function login() {
        if(isset($_SESSION['user'])){
            header("Location: index.php?route=home" );
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->authenticate($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user;
                $route = $user['role'] === 'admin' ? 'dashboard' : 'home';
                header("Location: index.php?route=$route" );
            } else {
                $error = "Invalid credentials";
            }
        }
        require 'views/login.php';
    }
    public function logout() {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: index.php?route=login');
    }
}