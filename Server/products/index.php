<?php

require_once __DIR__ . "/../Model.php";


try {
  $model = new Model();
  // $model->showClassName();
  // $model->query("SELECT * FROM app1_products");
  // $products = $model->receive();

  // メソッドチェーン
  $products = $model->query("SELECT * FROM app1_products")->receive();

  // response
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");
  print json_encode($products);
} catch (PDOException $e) {
  print $e->getMessage();
}
