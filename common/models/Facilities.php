<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "facilities".
 *
 * @property string $id
 * @property string $master_id
 * @property string $images
 * @property string $description
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Facilities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facilities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['master_id', 'description','is_deleted'], 'required'],
            [['master_id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['images', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'master_id' => 'Facilities',
            'images' => 'Images',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }

     public function getMasters()
    {   
        return $this->hasOne(Masters::className(), ['id' => 'master_id']);
    }
}
