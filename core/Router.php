<?php
namespace Core;

class Router {
    protected $controller = 'App\Controllers\HomeController'; 
    protected $method = 'index'; 
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        if (isset($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller';
            $file = "../app/Controllers/" . $controllerName . ".php";
            
            if (file_exists($file)) {
                $this->controller = 'App\Controllers\\' . $controllerName;
                unset($url[0]);
            }
        }
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        // ЗАПУСК: Викликаємо метод контролера з параметрами
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}