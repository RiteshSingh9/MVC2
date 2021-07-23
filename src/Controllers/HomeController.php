<?php
require ROOT.'src/Core/Controller.php';


class HomeController extends Controller
{
    public function home($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("home");
    }
}
