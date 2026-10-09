<?php

require_once __DIR__ . "/config.php";

class Model
{
  private string $className = "Model";
  private ?PDO $db = null;
  private ?PDOStatement $stmt = null;


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

  // SQLを実行する
  public function query(string $sql): self
  {
    $stmt = $this->db->query($sql);
    $stmt->execute();
    return $this;
  }

  // SQLの実行結果からレコード情報を取り出す
  public function receive(): array
  {
    if (is_null($this->stmt)) {
      return [];
    }
    $result = [];
    while ($row = $this->stmt->fetch(PDO::FETCH_ASSOC)) {
      $result[] = $row;
    }
    return $result;
  }

  // クラス名を表示する
  public function showClassName(): void
  {
    print $this->className;
  }
}
