<?php

use kilyte\Application;

class m_part {
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE parts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                partNo VARCHAR(255) NOT NULL,
                name VARCHAR(255) NOT NULL,
                notice VARCHAR(255) NOT NULL,
                description LONGTEXT NOT NULL,
                positionNo VARCHAR(255) NOT NULL,
                url VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE parts;";
        $db->pdo->exec($SQL);
    }
}