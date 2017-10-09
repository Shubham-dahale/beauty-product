<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admissions".
 *
 * @property string $id
 * @property string $name
 * @property string $dob
 * @property string $bloodgrp
 * @property string $address
 * @property string $mo_no
 * @property string $g_name
 * @property string $g_address
 * @property string $g_mo_no
 * @property string $college_name
 * @property string $class
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Admissions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admissions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dob', 'bloodgrp', 'address', 'mo_no', 'g_name', 'g_address', 'g_mo_no', 'college_name', 'class', 'is_deleted'], 'required'],
            [['mo_no', 'g_mo_no', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'dob', 'bloodgrp', 'address', 'g_name', 'g_address', 'college_name', 'class'], 'string', 'max' => 255],
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
            'dob' => 'Dob',
            'bloodgrp' => 'Bloodgrp',
            'address' => 'Address',
            'mo_no' => 'Mo No',
            'g_name' => 'G Name',
            'g_address' => 'G Address',
            'g_mo_no' => 'G Mo No',
            'college_name' => 'College Name',
            'class' => 'Class',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
