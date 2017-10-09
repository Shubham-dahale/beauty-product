<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "plans".
 *
 * @property string $id
 * @property string $name
 * @property double $price
 * @property string $description
 * @property string $created_by
 * @property string $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Plans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'description', 'is_deleted'], 'required'],
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
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
            'price' => 'Price',
            'description' => 'Description',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
