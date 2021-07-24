<?php

class ErrorController extends Controller
{
    public function notFound($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("Errors/404");
    }
}

