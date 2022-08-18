<?php

use kilyte\Application;

class m_catalog {
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE catalogs (
                id INT AUTO_INCREMENT PRIMARY KEY,
                vin VARCHAR(255) NOT NULL,
                title VARCHAR(255) NOT NULL,
                catalogID VARCHAR(255) NOT NULL,
                brand VARCHAR(255) NOT NULL,
                modelID VARCHAR(255) NOT NULL,
                carID VARCHAR(255) NOT NULL,
                frame VARCHAR(255) NOT NULL,
                modelName VARCHAR(255) NOT NULL,
                source VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE catalogs;";
        $db->pdo->exec($SQL);
    }
}