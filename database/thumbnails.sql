-- thumbnails サムネイル情報

-- テーブル情報

CREATE TABLE app1_thumbnails(
  thumbnail_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- ID 主キー
  thumbnail_filename VARCHAR(255) NOT NULL, -- ファイル名
  thumbnail_text VARCHAR(255), -- 代替テキスト
  thumbnail_product_id INT UNSIGNED NOT NULL -- 作品ID リレーション用
)


