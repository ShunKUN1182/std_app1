<?php

require_once __DIR__ . "/../Model.php";


try {
  if (filter_input(INPUT_SERVER, "REQUEST_METHOD") !== "POST") {
    throw new Exception("METHODの種類が違います");
  }

  $request = json_decode(file_get_contents("php://input"));
  var_dump($request);
  $request->product_title;
  exit;
  // $model = new Model();
  // $model->query("
  //   INSERT INTO app1_products(
  //     product_title,
  //     product_desc,
  //     product_skill,
  //     product_type,
  //     category_id
  //   )
  //   VALUES (
  //     'insert title',
  //     'insert desc',
  //     '[]',
  //     0,
  //     1
  //   )
  // ");
} catch (PDOException $e) {
  print $e->getMessage();
} catch (Exception $e) {
  print $e->getMessage();
}
