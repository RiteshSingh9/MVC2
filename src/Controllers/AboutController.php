<?php
require ROOT.'src/Core/Controller.php';


class AboutController extends Controller
{
    public function home($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("about");
    }
}
