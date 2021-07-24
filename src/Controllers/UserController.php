<?php

class UserController extends Controller {
    public function home($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("Users/home");
    } 

    public function profile($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
//        print_r($params['data']);
        extract($params['data']);
        if(!empty($key)) {
            $d['profile_id'] = $key ;
            $this->set($d);
        } else {
            echo "Please provide profile id";
        }
        $this->render("Users/profile");
    }
}