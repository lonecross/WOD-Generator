<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "girls".
 *
 * @property string $Name
 * @property string $Rules
 * @property string $Reps
 */
class Girl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'girls';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Rules', 'Reps'], 'required'],
            [['Name'], 'string', 'max' => 20],
            [['Rules', 'Reps'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'Rules' => 'Rules',
            'Reps' => 'Reps',
        ];
    }
}
