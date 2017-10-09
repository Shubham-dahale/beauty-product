<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "masters".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $parent_id
 * @property integer $is_active
 */
class Masters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'masters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type', 'parent_id'], 'required'],
            [['parent_id', 'is_active'], 'integer'],
            [['name', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'parent_id' => 'Parent ID',
            'is_active' => 'Is Active',
        ];
    }
}
