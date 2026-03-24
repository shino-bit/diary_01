<?php
namespace App\Models;

use Core\Model;
use PDO;

class User extends Model {
    public function create($data) {
        $sql = "INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)";
        $stmt = $this->db->prepare($sql);

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        return $stmt->execute([
            ':username' => $data['username'],
            ':email'    => $data['email'],
            ':password' => $data['password'],
            ':role'     => $data['role'] ?? 'user'
        ]);
    }

    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':email' => $email]);
        return $stmt->fetch();
    }
}