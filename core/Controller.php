<?php
namespace Core;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        
        $viewPath = "../app/Views/" . $view . ".php";
        
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die("Помилка: View '$view' не знайдено за шляхом $viewPath");
        }
    }
}