<?php

require_once __DIR__ . "/../Model.php";

try {
  $headers = getallheaders();
  if (filter_input(INPUT_SERVER, "REQUEST_METHOD") !== "POST" || $headers["_method"] !== 'DELETE') {
    throw new Exception("METHODの種類が違います");
  }
  $request = json_decode(file_get_contents("php://input"));

  $model = new Model();
  $model->query("
    DELETE FROM app1_products
    WHERE product_id = {$request->product_id}
  ");
} catch (PDOException $e) {
  print $e->getMessage();
} catch (Exception $e) {
  print $e->getMessage();
}

// レスポンスのデータ
$response = [];
$response["message"] = "削除しました";
$response["status"] = 200;
$response["data"] = [];
print json_encode($response);
