<?php

require_once __DIR__ . "/../Model.php";


try {
  $model = new Model();
  $model->showClassName();
  $db = new PDO(
    "mysql:host=localhost; dbname=sfukusima;charset=utf8mb4",
    "sfukusima",
    "eccMyAdmin",
  );

  $sql = "SELECT * FROM app1_products";
  $stmt = $db->query($sql);
  $stmt->execute();
  $products = [];
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $products[] = $row;
  }
  var_dump($products);
} catch (PDOException $e) {
  print $e->getMessage();
}
