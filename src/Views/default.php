<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/assets/css/materialize.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/assets/css/icon.css' ?>">
    <title><?php echo $title; ?></title>
</head>
<body>
<!--    NavBar  -->
<ul id="nav-dropdown" class="dropdown-content">
    <li><a href="<?php echo WEBROOT . 'user/'?>">Home</a></li>
    <li><a href="<?php echo WEBROOT . 'user/profile/'?>">Profile</a></li>
    <li class="divider"></li>
<!--    <li><a href="#!">three</a></li>-->
</ul>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue darken-3">
            <a href="<?php echo WEBROOT ?>" class="brand-logo right">MVC 2</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?php echo WEBROOT ?>">Home</a></li>
                <li><a href="<?php echo WEBROOT . 'about/'?>">About</a></li>
                <li><a href="<?php echo WEBROOT . 'contact/'?>">Contact</a></li>
                <li><a href="<?php echo WEBROOT . 'services/'?>">Services</a></li>
                <li><a href="#" class="dropdown-trigger" data-target="nav-dropdown">User <i class="material-icons right">arrow_drop_down</i></a></li> <!-- dropdown trigger -->
            </ul>
        </div>
    </nav>
</div>


<?php
        echo $content_for_layout;
    ?>
<script src="<?php echo WEBROOT . 'public/assets/js/jquery-3.6.0.js' ?>"></script>
<script src="<?php echo WEBROOT . 'public/assets/js/materialize.js' ?>"></script>
<script src="<?php echo WEBROOT . 'public/assets/js/script.js' ?>"></script>
</body>
</html>