<?php

namespace app\models;

use kilyte\model\UserModel;

class SubGroup extends UserModel
{
    public int $id = 0;
    public string $carID = '';
    public string $subgroup = '';
    public string $parts = '';
    public string $name = '';
    public string $img = '';
    public string $description = '';
    public string $parentID = '';

    public static function tableName(): string
    {
        return 'subgroups';
    }

    public function attributes(): array
    {
        return ['carID', 'subgroup', 'parts', 'name', 'img', 'description', 'parentID'];
    }

    public function labels(): array
    {
        return [
            'carID' => 'Car ID',
            'subgroup' => 'Sub Group',
            'parts' => 'Parts',
            'name' => 'Name',
            'img' => 'Image',
            'description' => 'Description',
            'parentID' => 'Parent ID'
        ];
    }

    public function rules()
    {
        return [
            'carID' => [self::RULE_REQUIRED],
            'subgroup' => [self::RULE_REQUIRED],
            'parts' => [self::RULE_REQUIRED],
            'name' => [self::RULE_REQUIRED],
            'parentID' => [self::RULE_REQUIRED]
        ];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}