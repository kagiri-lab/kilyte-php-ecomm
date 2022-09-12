<?php

namespace app\models;

use kilyte\database\DbModel;

class PartCatalog extends DbModel
{
    public int $id = 0;
    public string $category = '';
    public string $category_two = '';
    public string $oe_number = '';
    public string $description = '';
    public string $description_two = '';
    public string $diy_price = '';

    public static function tableName(): string
    {
        return 'partcatalogs';
    }

    public function attributes(): array
    {
        return ['category', 'category_two', 'oe_number', 'description', 'description_two', 'diy_price'];
    }

    public function labels(): array
    {
        return [];
    }

    public function rules()
    {
        return [
            'oe_number' => [self::RULE_REQUIRED]
        ];
    }
}
