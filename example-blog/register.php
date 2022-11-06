<?php

require_once ('core/helpers.php');

$isAuth = (bool) rand(0,1);

$reqisterContent = include_template('pages/register-template.php');

$page = include_template('layout.php',[
        'isAuth'=>$isAuth,
        'content'=>$reqisterContent
]);

print ($page);

$isAuth = (bool) rand(0,1);

?>