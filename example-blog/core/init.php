<?php

$host = 'localhost';
$dbName = 'blog';
$userName = 'root';
$password = 'root';
$charset = 'utf8mb4';
$collate = 'utf8mb4_0900_ai_ci';
$driver = 'mysql';

$dsn = "{$driver}:host={$host};dbname={$dbName};charset={$charset}";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$charset} COLLATE {$collate}"
];

try {
    $con = new PDO($dsn, $userName, $password, $options);
} catch (PDOException $e) {
    die("Подключение к серверу MySQL не удалось - {$e->getMessage()}");
}