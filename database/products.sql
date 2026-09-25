-- 作品情報

-- テーブル情報
CREATE TABLE  app1_products(
  product_id INT UNSIGNED AUTO_INCREMENT, -- ID 主キー
  product_title VARCHAR(256) NOT NULL, -- タイトル 必須項目
  product_desc TEXT, -- 説明文
  product_skill TEXT, -- 使用技術　外部キーをJSONで
  product_type TINYINT(1) DEFAULT 0, -- 制作形態 0は個人,1はチーム
  product_category_id INT UNSIGNED NOT NULL, -- カテゴリID
  product_url VARCHAR(256), -- url
  product_award TINYINT(1) DEFAULT 0, -- 受賞歴 0:無し、1：有り

  PRIMARY KEY(product_id)
);