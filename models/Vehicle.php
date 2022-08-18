<?php

namespace app\models;

use kilyte\model\UserModel;

class Vehicle extends UserModel
{
    public int $id = 0;
    public string $registration = '';
    public string $chassis = '';
    public string $engine = '';

    public static function tableName(): string
    {
        return 'vehicles';
    }

    public function attributes(): array
    {
        return ['registration', 'chassis', 'engine'];
    }

    public function labels(): array
    {
        return [
            'registration' => 'Vehicle Registration',
            'chassis' => 'Chassis No',
            'engine' => 'Engine No'
        ];
    }

    public function rules()
    {
        return [
            'registration' => [self::RULE_REQUIRED],
            'chassis' => [self::RULE_REQUIRED],
            'engine' => [self::RULE_REQUIRED]
        ];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}