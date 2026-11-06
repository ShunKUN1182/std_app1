<?php

require_once __DIR__ . "/../Model.php";

try {
  $headers = getallheaders();
  if (filter_input(INPUT_SERVER, "REQUEST_METHOD") !== "POST" || $headers["_method"] !== "PUT") {
    throw new Exception("METHODの種類が違います");
  }
  $request = json_decode(file_get_contents("php://input"));

  $request->product_skill = json_encode($request->product_skill);
  $model = new Model();
  $model->query("
    UPDATE
      app1_products
    SET
      product_title = '{$request->product_title}',
      product_desc = '{$request->product_desc}',
      product_skill = '{$request->product_skill}',
      product_type = '{$request->product_type}',
      category_id = '{$request->category_id}'
    WHERE
      product_id = {$request->product_id}
  ");
} catch (PDOException $e) {
  print $e->getMessage();
} catch (Exception $e) {
  print $e->getMessage();
}

// レスポンスのデータ
$response = [];
$response["message"] = "更新しました";
$response["status"] = 200;
$response["data"] = [];
print json_encode($response);
