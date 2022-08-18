<?php

namespace app\models;

use kilyte\model\UserModel;

class TaskQuery extends UserModel
{
    public int $id = 0;
    public string $registration = '';
    public string $task = '';
    public string $result = '';

    public static function tableName(): string
    {
        return 'taskqueries';
    }

    public function attributes(): array
    {
        return ['registration', 'task', 'result'];
    }

    public function labels(): array
    {
        return [
            'registration' => 'Vehicle Registration'
        ];
    }

    public function rules()
    {
        return [
            'registration' => [self::RULE_REQUIRED],
            'task' => [self::RULE_REQUIRED]
        ];
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}