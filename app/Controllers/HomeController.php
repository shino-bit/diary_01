<?php
namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function index() {
        if (isset($_SESSION['user_id'])) {
            echo "<h2>Вітаємо, " . $_SESSION['username'] . "!</h2>";
            echo "<p>Твій статус: " . $_SESSION['role'] . "</p>";
            echo "<a href='/auth/logout'>Вийти</a>";
        } else {
            echo "<h2>Ви не авторизовані.</h2>";
            echo "<a href='/auth/login'>Увійти</a> або <a href='/auth/register'>Реєстрація</a>";
        }
    }
}