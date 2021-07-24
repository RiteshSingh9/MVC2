<?php


class Router
{
    
    public static function parse($url, $request)
    {
        $url = explode('/', trim($url));

        // url[2] is controller
        // check if $controller is given
        if(isset($url[2]) && !empty($url[2])) {
            // i.e. controller is given
            $request->controller = $url[2];
        } else {
            // if no controller if given use default controller
            $request->controller = "home";
        }

        // $url[3] is method
        // check if method is given
        if(isset($url[3]) && !empty($url[3])) {
            $request->method = $url[3];
        } else {
            // if no method is given
            $request->method = "home";
        }

        if(isset($url[4]) and !empty($url[4])) {
            $value = $url[4];
        } else {
            $value = "";
        }

        $request->params = ['title'=> ucfirst($request->method), 'data'=>array(
            'key'=> $value
        )];
//        $request->params = ['title'=> ucfirst($request->method)];
    }
}