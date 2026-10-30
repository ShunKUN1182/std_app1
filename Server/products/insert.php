<?php

require_once __DIR__ . "/../Model.php";


try {
  $model = new Model();
  $model->query("
    INSERT INTO app1_products(
      product_title,
      product_desc,
      product_skill,
      product_type,
      category_id
    )
    VALUES (
      'insert title',
      'insert desc',
      '[]',
      0,
      1
    )
  ");
} catch (PDOException $e) {
  print $e->getMessage();
}
