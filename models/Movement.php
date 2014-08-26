<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movements".
 *
 * @property string $name
 * @property integer $category
 * @property string $equipment
 * @property string $men1
 * @property string $men2
 * @property string $men3
 * @property string $women1
 * @property string $women2
 * @property string $women3
 */
class Movement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'equipment', 'men1', 'men2', 'men3', 'women1', 'women2', 'women3'], 'required'],
            [['category'], 'integer'],
            [['name', 'equipment'], 'string', 'max' => 1000],
            [['men1', 'men2', 'men3', 'women1', 'women2', 'women3'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'category' => 'Category',
            'equipment' => 'Equipment',
            'men1' => 'Men1',
            'men2' => 'Men2',
            'men3' => 'Men3',
            'women1' => 'Women1',
            'women2' => 'Women2',
            'women3' => 'Women3',
        ];
    }
}
