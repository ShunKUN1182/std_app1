<?php
require_once __DIR__ . "/../ini.php";

try {
  $db = new PDO(
    "mysql:host=localhost; dbname=sfukusima;charset=utf8mb4",
    "sfukusima",
    "eccMyAdmin",
  );
  print "OK";
} catch (PDOException $e) {
  print $e->getMessage();
}
