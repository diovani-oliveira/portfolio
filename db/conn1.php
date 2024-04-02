<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portfolio";

$pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);