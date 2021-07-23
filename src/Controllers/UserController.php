<?php

require ROOT.'src/Core/Controller.php';

class UserController extends Controller {

    public function home($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("Users/home");
    } 

    public function users($params) {
        
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("Users/userList");
    }
}