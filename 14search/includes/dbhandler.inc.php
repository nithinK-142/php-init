<?php
$host = "localhost";
$dbname = "php-db";
$dsn = "mysql:host=$host;dbname=$dbname";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername ,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed!! ".$e->getMessage();
}