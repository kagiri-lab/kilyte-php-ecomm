<?php use kilyte\Application; class m_vehicles { public function up() {$db = Application::$app->db; $SQL = "CREATE TABLE vehicles ( id INT AUTO_INCREMENT PRIMARY KEY,registration VARCHAR(255) NOT NULL,chassis VARCHAR(255) NOT NULL,engine VARCHAR(255) NOT NULL, updated_at VARCHAR(255), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  )  ENGINE=INNODB;";  $db->pdo->exec($SQL); } public function down() { $db = Application::$app->db; $SQL = "DROP TABLE vehicles;"; $db->pdo->exec($SQL); } }