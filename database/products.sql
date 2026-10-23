-- 作品情報

-- テーブル情報
DROP TABLE IF EXISTS app1_products;
CREATE TABLE  app1_products(
  product_id INT UNSIGNED AUTO_INCREMENT, -- ID 主キー
  product_title VARCHAR(256) NOT NULL, -- タイトル 必須項目
  product_desc TEXT, -- 説明文
  product_skill TEXT, -- 使用技術　外部キーをJSONで
  product_type TINYINT(1) DEFAULT 0, -- 制作形態 0は個人,1はチーム
  category_id INT UNSIGNED NOT NULL, -- カテゴリID
  product_url VARCHAR(256), -- url
  product_award TINYINT(1) DEFAULT 0, -- 受賞歴 0:無し、1：有り

  PRIMARY KEY(product_id)
) 
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

-- テストデータ (シード)
INSERT INTO app1_products(
  product_title,
  product_desc,
  product_skill,
  product_type,
  category_id
)
VALUES
(
  "中崎町キャンドルナイトポスター",
  "準グランプリを受賞した作品になります",
  '["HTML","CSS","Figma","Illustrator"]',
  0,
  1
),(
  "URANAI",
  "占いをもっと楽しくする作品になります",
  '["HTML","CSS","Figma","Illustrator"]',
  0,
  1
),
(
  "トレジャーアカデミー",
  "お宝ザクザク集めよう！！",
  '["HTML","CSS","Figma","Illustrator"]',
  0,
  1
),
(
  "友安製作所LPサイト",
  "大阪八尾にある友安製作所様と連携し、LPサイトを作成させていただきました",
  '["HTML","CSS","Figma","Illustrator"]',
  0,
  1
);


