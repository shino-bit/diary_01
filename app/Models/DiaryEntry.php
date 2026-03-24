<?php
namespace App\Models;

use Core\Model;
use PDO;

class DiaryEntry extends Model {

    public function create($data) {
        $sql = "INSERT INTO diary_entries (user_id, title, content) VALUES (:user_id, :title, :content)";
        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute([
            ':user_id' => $_SESSION['user_id'], 
            ':title'   => $data['title'],
            ':content' => $data['content']
        ]);
    }

    public function getAllByUserId($userId) {
        $sql = "SELECT * FROM diary_entries WHERE user_id = :user_id ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':user_id' => $userId]);
        return $stmt->fetchAll();
    }

    public function getById($id, $userId) {
        $sql = "SELECT * FROM diary_entries WHERE id = :id AND user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id, ':user_id' => $userId]);
        return $stmt->fetch();
    }

    public function update($id, $userId, $data) {
        $sql = "UPDATE diary_entries SET title = :title, content = :content WHERE id = :id AND user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id'      => $id,
            ':user_id' => $userId,
            ':title'   => $data['title'],
            ':content' => $data['content']
        ]);
    }

    public function delete($id, $userId) {
        $sql = "DELETE FROM diary_entries WHERE id = :id AND user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id, ':user_id' => $userId]);
    }
}