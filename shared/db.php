<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=travel;host=127.0.0.1';
$user = 'root';
$password = '';

$pdo = null;

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (Throwable $e) {
    die(var_dump($e));
}