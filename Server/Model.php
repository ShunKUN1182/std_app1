<?php

require_once __DIR__ . "/config.php";

class Model
{
  private string $className = "Model";
  private ?PDO $db = null;

  public function __construct()
  {
    if (is_null($this->db)) {
      $this->connect();
    }
  }

  // DBへ接続
  private function connect(): void
  {
    $this->db = new PDO(DB_DSN, DB_USER, DB_PASS,);
  }
  // クラス名を表示する
  public function showClassName(): void
  {
    print $this->className;
  }
}
