<?php

namespace app\models;

class ModelController
{

    public static function generateMigrate()
    {
        return [
            "users" => new User,
            "taskqueries" => new TaskQuery,
            "vehicles" => new Vehicle,
            "partcatalogs" => new PartCatalog,
            'stocks' => new Stock
        ];
    }
}
