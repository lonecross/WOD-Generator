<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "heros".
 *
 * @property string $Name
 * @property string $Reps
 * @property string $Rules
 * @property string $Notes
 */
class Hero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'heros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Reps', 'Rules', 'Notes'], 'required'],
            [['Name'], 'string', 'max' => 25],
            [['Reps', 'Rules', 'Notes'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'Reps' => 'Reps',
            'Rules' => 'Rules',
            'Notes' => 'Notes',
        ];
    }
}
