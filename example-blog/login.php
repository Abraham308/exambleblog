<?php

require_once ('core/helpers.php');

    $isAuth = (bool) rand(0,1);

$loginContent = include_template('pages/login-template.php');

$page = include_template('layout.php',[
        'isAuth'=>$isAuth,
        'content'=>$loginContent
]);

print ($page);

?>
