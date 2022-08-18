<?php

use kilyte\Application;

class m_parameter {
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE parameters (
                id INT AUTO_INCREMENT PRIMARY KEY,
                registration VARCHAR(255) NOT NULL,
                chassis VARCHAR(255) NOT NULL,
                engine VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE parameters;";
        $db->pdo->exec($SQL);
    }
}