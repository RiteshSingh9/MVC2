<?php


class ContactController extends Controller
{
    public function home($params)
    {
        $d['title'] = $params['title'];
        $this->set($d);
        $this->render("contact");
    }
}