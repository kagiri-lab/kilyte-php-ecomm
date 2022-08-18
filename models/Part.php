<?php

namespace app\models;

use kilyte\model\UserModel;

class Part extends UserModel
{
    public int $id = 0;
    public string $partNo = '';
    public string $name = '';
    public string $notice = '';
    public string $description = '';
    public string $positionNo = '';
    public string $url = '';

    public static function tableName(): string
    {
        return 'parts';
    }

    public function attributes(): array
    {
        return ['partNo', 'name', 'notice', 'description', 'positionNo', 'url'];
    }

    public function labels(): array
    {
        return [
            'partNo' => 'Part No',
            'name' => 'Part Name',
            'notice' => 'Notice',
            'description' => 'Description',
            'positionNo' => 'Position No',
            'url' => 'Url'
        ];
    }

    public function rules()
    {
        return [
            'partNo' => [self::RULE_REQUIRED],
            'name' => [self::RULE_REQUIRED],
            'notice' => [self::RULE_REQUIRED],
            'description' => [self::RULE_REQUIRED]
        ];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}