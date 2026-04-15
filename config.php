<?php
$host = 'localhost';
$dbname = 'MyProject';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname; charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $pdo = NEW PDO($dsn, $user, $pass, $options);
    // echo "Подключение успешно!" . '<br>';
        } catch (PDOException $e) {
        die("Ошибка подключения:" . $e -> getMessage());
    }