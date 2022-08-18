<?php

namespace app\models;

use kilyte\model\UserModel;

class PartGroup extends UserModel
{
    public int $id = 0;
    public string $partNo = '';
    public string $positionNo = '';
    public string $name = '';
    public string $description = '';

    public static function tableName(): string
    {
        return 'partgroups';
    }

    public function attributes(): array
    {
        return ['partNo', 'positionNo', 'name', 'description'];
    }

    public function labels(): array
    {
        return [
            'partNo' => 'Part No',
            'name' => 'Part Name',
            'description' => 'Description',
            'positionNo' => 'Position No'
        ];
    }

    public function rules()
    {
        return [
            'partNo' => [self::RULE_REQUIRED],
            'name' => [self::RULE_REQUIRED],
            'positionNo' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED]
        ];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}