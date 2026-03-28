<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class AuthController extends Controller {

    /**
     * Дефолтний метод, який викликає роутер, якщо не вказано дію.
     */
    public function index() {
        $this->login();
    }

    public function register() {
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
                header('Location: /auth/login');
                exit;
            } else {
                // Виводимо помилку в інтерфейс, а не просто текстом
                $this->render('auth/register', [
                    'title' => 'Реєстрація',
                    'error' => 'Помилка при реєстрації. Можливо, цей Email вже зайнятий.'
                ]);
            }
        }
    }

    public function login() {
        $this->render('auth/login', ['title' => 'Вхід']);
    }

    /**
     * Перейменовуємо 'auth' на 'authenticate', щоб збігалося з URL /auth/authenticate
     */
    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header('Location: /diary/index'); 
                exit;
            } else {
                // Виводимо помилку через рендер у наш CSS-блок
                $this->render('auth/login', [
                    'title' => 'Вхід',
                    'error' => 'Невірний email або пароль!'
                ]);
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