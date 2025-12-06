<?php
$host = 'localhost';
$dbname = 'bbs';
$user = 'root';
$pass = 'root'; // MAMP のデフォルト（Windows）

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}