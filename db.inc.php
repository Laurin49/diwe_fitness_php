<?php
try {
    $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8';
    $pdo = new PDO($dsn,DB_USER, DB_PASS);
} catch (PDOException $e) {
    die($e->getMessage());
}