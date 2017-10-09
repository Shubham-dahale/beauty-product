<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "enquiry".
 *
 * @property string $id
 * @property string $name
 * @property string $mobile_no
 * @property string $email
 * @property string $room_type
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Enquiry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enquiry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'mobile_no', 'email', 'room_type'], 'required'],
            [['mobile_no', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['optional'], 'string'],
            [['name', 'email', 'room_type'], 'string', 'max' => 255],
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
            'mobile_no' => 'Mobile No',
            'email' => 'Email',
            'room_type' => 'Room Type',
            'optional'=>'Optional',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
