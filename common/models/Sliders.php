<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sliders".
 *
 * @property string $id
 * @property string $caption
 * @property string $image_file
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Sliders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption'], 'required'],
            [['id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['caption'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['image_file'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'image_file' => 'Image File',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
