<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\User;
use App\Models\DiaryEntry;

class AdminController extends Controller {
    
    public function __construct() {
        // Жорстка перевірка прав доступу
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            header('Location: /'); // Викидаємо звичайних юзерів на головну
            exit;
        }
    }

    public function index() {
        $userModel = new User();
        $users = $userModel->getAll(); 

        $this->render('admin/index', [
            'title' => 'Панель адміністратора',
            'users' => $users
        ]);
    }
}