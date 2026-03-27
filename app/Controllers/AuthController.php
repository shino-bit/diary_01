<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class AuthController extends Controller {

    public function register() {
        // Тепер змінна 'title' потрапить у header.php через метод render
        $this->render('auth/register', ['title' => 'Реєстрація']);
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            
            $userData = [
                'username' => $_POST['username'],
                'email'    => $_POST['email'],
                'password' => $_POST['password']
            ];

            if ($userModel->create($userData)) {
                // Краще відразу редиректнути на логін
                header('Location: /auth/login');
                exit;
            } else {
                echo "Помилка при реєстрації. <a href='/auth/register'>Спробувати ще раз</a>";
            }
        }
    }

    public function login() {
        $this->render('auth/login', ['title' => 'Вхід']);
    }

    public function auth() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header('Location: /'); 
                exit;
            } else {
                echo "Невірний email або пароль! <a href='/auth/login'>Спробувати ще раз</a>";
            }
        }
    }

    public function logout() {
        $_SESSION = [];

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }

        session_destroy();

        header('Location: /');
        exit;
    }
}