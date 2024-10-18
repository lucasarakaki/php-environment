<?php
$pdo = null;
try {
    $pdo = new PDO('mysql:host=mariadb_dkr;dbname=database', 'root', 'root');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

phpinfo();
