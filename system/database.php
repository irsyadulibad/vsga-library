<?php

try {
    $dsn = "mysql:host={$database->host};dbname={$database->dbase}";
    $conn = new PDO($dsn, $database->user, $database->pass);
} catch (PDOException $e) {
    die($e->getMessage());
}
