<?php
//spl_autoload_register(function ($className) {
//    require ROOT.'src/'.$className.'.php';
//});
//

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
        if (file_exists($file)) {
            $controller = new $controller();
        } else {
            $this->error = true; // file not found
        }
        // check if mehtod exists
        if(method_exists($controller, $method)) {
            return [$controller, $method];
        } else {
            $this->error = true;
        }

        if($this->error) {
            $controller = 'ErrorController';
            $file = ROOT.'src/Controller/'.$controller.'.php';
            $method = 'notFound';
            $controller = new $controller;
            return [$controller, $method];
        }
    }
}
