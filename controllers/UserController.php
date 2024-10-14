<?php
class User {
    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function authenticate($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        if ($user && ($password === $user['password'])) {
            return $user;
        }
        return false;
    }
    static function isAdmin(){
        return $_SESSION['user']['role'] === 'admin';
    }
}