<?php use kilyte\Application; class m_partcatalogs { public function up() {$db = Application::$app->db; $SQL = "CREATE TABLE partcatalogs ( id INT AUTO_INCREMENT PRIMARY KEY,category VARCHAR(255) NOT NULL,category_two VARCHAR(255) NOT NULL,oe_number VARCHAR(255) NOT NULL,description VARCHAR(255) NOT NULL,description_two VARCHAR(255) NOT NULL,diy_price VARCHAR(255) NOT NULL, updated_at VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  )  ENGINE=INNODB;";  $db->pdo->exec($SQL); } public function down() { $db = Application::$app->db; $SQL = "DROP TABLE partcatalogs;"; $db->pdo->exec($SQL); } }