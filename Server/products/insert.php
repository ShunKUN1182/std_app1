<?php

require_once __DIR__ . "/../Model.php";

try {
  if (filter_input(INPUT_SERVER, "REQUEST_METHOD") !== "POST") {
    throw new Exception("METHODの種類が違います");
  }
  $request = json_decode(file_get_contents("php://input"));
  $request->product_skill = json_encode($request->product_skill);
  $model = new Model();
  $stmt = $model->query("
    INSERT INTO app1_products(
      product_title,
      product_desc,
      product_skill,
      product_type,
      category_id
    )
    VALUES (
      '{$request->product_title}',
      '{$request->product_desc}',
      '{$request->product_skill}',
      {$request->product_type},
      {$request->category_id}
    )
  ");
} catch (PDOException $e) {
  print $e->getMessage();
} catch (Exception $e) {
  print $e->getMessage();
}

// レスポンスのデータ
$response = [];
$response["message"] = "登録が成功しました";
$response["status"] = 200;
$response["data"] = [
  "product_id" => $model->lastId("product_id")
];
print json_encode($response);
