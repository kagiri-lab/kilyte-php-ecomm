<?php

namespace app\models;

use kilyte\model\UserModel;

class Stock extends UserModel
{
    public int $id = 0;
    public string $partNo = '';
    public string $units = '';
    public string $price = '';

    public static function tableName(): string
    {
        return 'stocks';
    }

    public function attributes(): array
    {
        return ['partNo', 'units', 'price'];
    }

    public function labels(): array
    {
        return [
            'partNo' => 'Part Number',
            'units' => 'Units',
            'price' => 'Price'
        ];
    }

    public function rules()
    {
        return [
            'partNo' => [self::RULE_REQUIRED],
            'units' => [self::RULE_REQUIRED],
            'price' => [self::RULE_REQUIRED]
        ];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}