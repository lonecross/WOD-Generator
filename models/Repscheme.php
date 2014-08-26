<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repschemes".
 *
 * @property string $name
 * @property integer $skill1
 * @property integer $skill2
 * @property integer $skill3
 * @property integer $skill4
 * @property integer $skill5
 * @property integer $skill6
 * @property integer $skill7
 */
class Repscheme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repschemes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'skill1', 'skill2', 'skill3', 'skill4', 'skill5', 'skill6', 'skill7'], 'required'],
            [['skill1', 'skill2', 'skill3', 'skill4', 'skill5', 'skill6', 'skill7'], 'integer'],
            [['name'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'skill1' => 'Skill1',
            'skill2' => 'Skill2',
            'skill3' => 'Skill3',
            'skill4' => 'Skill4',
            'skill5' => 'Skill5',
            'skill6' => 'Skill6',
            'skill7' => 'Skill7',
        ];
    }
}
