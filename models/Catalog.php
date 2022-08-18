<?php

namespace app\models;

use kilyte\model\UserModel;

class Catalog extends UserModel
{
    public int $id = 0;
    public string $vin = '';
    public string $title = '';
    public string $catalogID = '';
    public string $brand = '';
    public string $modelID = '';
    public string $carID = '';
    public string $frame = '';
    public string $modelName = '';
    public string $source = '';

    public static function tableName(): string
    {
        return 'catalogs';
    }

    public function attributes(): array
    {
        return ['vin', 'title', 'catalogID', 'brand', 'modelID', 'carID', 'frame', 'modelName', 'source'];
    }

    public function labels(): array
    {
        return [
            'vin' => 'VIN',
            'title' => 'Catalog Title',
            'catalogID' => 'Catalog ID',
            'brand' => 'Brand',
            'modelID' => 'Model ID',
            'carID' => 'Car ID',
            'frame' => 'Frame',
            'modelName' => 'Model Name',
            'source' => 'Source'
        ];
    }

    public function rules()
    {
        return [
            'vin' => [self::RULE_REQUIRED],
            'title' => [self::RULE_REQUIRED],
            'catalogID' => [self::RULE_REQUIRED],
            'carID' => [self::RULE_REQUIRED],
            'modelID' => [self::RULE_REQUIRED],
        ];
    }


    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}