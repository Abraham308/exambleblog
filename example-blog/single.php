<?php
require_once ('core/helpers.php');
require_once ('core/init.php');

/**
 * @var PDO $con
 */

$isAuth = (bool) rand(0,1);

$postId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$stmt = $con->prepare('SELECT p.id, p.title, p.img_url, p.description, c.title as category
                             FROM posts p JOIN categories c on p.category_id = c.id WHERE p.id=:id');
$stmt->execute(['id'=> $postId]);
$post = $stmt->fetch();

$singleContent = include_template('pages/single-template.php',[
    'post'=>$post
]);

$page = include_template('layout.php',[
   'isAuth'=>$isAuth,
   'content'=>$singleContent
]);

print ($page);
