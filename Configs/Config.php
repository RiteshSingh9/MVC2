<?php

define('ENV', 'dev');

$config = array(
    "dev"=>array(
        "dbs"=> array(
            "db1"=>array(
                "host"=>"localhost",
                "user"=>"root",
                "pass"=>"",
                "db"=>"MVC2"
            ),
        ),
    ),
    "prod"=>array()
);

if(ENV == 'dev'){
    $config = $config['dev'];
} else {
    $config = $config['prod'];
};