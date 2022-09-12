<?php

namespace app\models;

use kilyte\database\DbModel;

class Stock extends DbModel
{
    public int $id = 0;
    public string $automanItemID = '';
    public string $stock_code = '';
    public string $partNo = '';
    public string $description = '';
    public string $application = '';
    public string $brand = '';
    public string $price_one = '';
    public string $price_two = '';
    public string $price_three = '';
    public string $price_four = '';
    public string $stk = '';
    public string $partNo_two = '';
    public string $model = '';
    public string $engine = '';
    public string $dimension = '';
    public string $dimension_two = '';
    public string $short_description = '';
    public string $origin = '';
    public string $picture = '';

    public static function tableName(): string
    {
        return 'stocks';
    }

    public function attributes(): array
    {
        return [
            'automanItemID',
            'stock_code',
            'partNo',
            'description',
            'application',
            'brand',
            'price_one',
            'price_two',
            'price_three',
            'price_four',
            'stk',
            'partNo_two',
            'model',
            'engine',
            'dimension',
            'dimension_two',
            'short_description',
            'origin',
            'picture'
        ];
    }

    public function labels(): array
    {
        return [];
    }

    public function rules()
    {
        return [
            'partNo' => [self::RULE_REQUIRED]
        ];
    }
}
