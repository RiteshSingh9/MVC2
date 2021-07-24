<?php

class HomeController extends Controller
{
    public function home($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("home");
    }

    public function about($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        echo "About";
        $this->render("about");
    }
}
