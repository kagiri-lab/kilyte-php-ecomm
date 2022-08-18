<?php

use kilyte\Application;

class m_taskqueries {
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE taskqueries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                registration VARCHAR(255) NOT NULL,
                task LONGTEXT NOT NULL,
                result LONGTEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE taskqueries;";
        $db->pdo->exec($SQL);
    }
}