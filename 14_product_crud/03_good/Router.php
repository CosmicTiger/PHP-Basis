<?php

namespace app;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }
        if ($fn) {
            // echo '<pre>';
            // var_dump($fn);
            // echo '</pre>';

            call_user_func($fn, $this);
        } else {
            echo "Page not found";
            exit;
        }
    }

    public function renderView($view) // products/index
    {
        include_once __DIR__ . "/views/$view.php";
    }
}
