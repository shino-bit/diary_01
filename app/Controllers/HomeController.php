<?php
namespace App\Controllers;

use Core\Controller;
use Core\Database;

class HomeController extends Controller {
    public function index() {
        try {
            $db = Database::getInstance()->getConnection();
            echo "<h2>База даних працює</h2>";
        } catch (\Exception $e) {
            echo "<h2>Помилка бази даних: " . $e->getMessage() . "</h2>";
        }
    }
}