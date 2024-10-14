<?php
class Category {
    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function getAllCategories() {
        $stmt = $this->db->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }

    public function createCategory($data) {
        $stmt = $this->db->prepare("INSERT INTO categories (name, description) VALUES (?, ?)");
        $stmt->execute([$data['name'], $data['description']]);
    }

    public function getCategoryById($id) {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateCategory($id, $data) {
        $stmt = $this->db->prepare("UPDATE categories SET name = ?, description = ? WHERE id = ?");
        $stmt->execute([$data['name'], $data['description'], $id]);
    }

    public function deleteCategory($id) {
      // handle delete product belong this category before delete this category
      try{
        $this->db->beginTransaction();
        $stmt1 = $this->db->prepare("DELETE FROM products WHERE categoryId = ?");
        $stmt1->execute([$id]);
        $stmt2 = $this->db->prepare("DELETE FROM categories WHERE id = ?");
        $stmt2->execute([$id]);
        $this->db->commit();
      } catch(Exception $e){
        $this->db->rollBack();
        echo "Error: ". $e->getMessage();
      }
    }
}