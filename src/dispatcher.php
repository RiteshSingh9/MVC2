<?php


class Dispatcher
{
    private $request;
    private $error = false; // true if the is an errro like error 404

    public function dispatch()
    {
        // require 'core/Router.php';
        $this->request = new Request();
        // $this->request->url = explode('/', $this->request->url);
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController($this->request->controller, $this->request->method);
        //  it will get an array containing controller name, method name

        call_user_func_array([$controller[0], $controller[1]], [$this->request->params]);
    }

    public function loadController($controller, $method)
    {

        $controller = ucfirst($controller) . 'Controller';
        $file = ROOT . 'src/Controllers/' . $controller . '.php';

        // check if controller file exists
        if (file_exists($file)) {
            require $file;
            $controller = new $controller(); // create an instance if file exists

            // check if method exists
            if (method_exists($controller, $method)) {
                return [$controller, $method];
            } else {
                $this->error = true; // controller not found show 404 error
            }
        } else {
            $this->error = true; // controller not found show 404 error
        }

        // check if error value id true
        if ($this->error) {
            $controller = 'ErrorController';
            $file = ROOT . 'src/Controllers/' . $controller . '.php';
            $method = "notFound";

            require $file;
            $controller = new $controller;
            return [$controller, $method];
        }
    }
}
