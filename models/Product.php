<?php
class Product {
    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function getAllProducts() {
        $stmt = $this->db->query("SELECT P.*, C.name as categoryName, C.description as categoryDescription FROM products as P JOIN categories as C ON P.categoryId = C.id");
        return $stmt->fetchAll();
    }

    public function createProduct($data) {
        $stmt = $this->db->prepare("INSERT INTO products (name, description, price, image_name, categoryId) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$data['name'], $data['description'], $data['price'], $data['image_name'], $data['category_id']]);
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateProduct($id, $data) {
        $stmt = $this->db->prepare("UPDATE products SET name = ?, description = ?, price = ?, image_name = ?, categoryId = ? WHERE id = ?");
        $stmt->execute([$data['name'], $data['description'], $data['price'], $data['image_name'],$data['category_id'], $id]);
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }
}