<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sites".
 *
 * @property string $id
 * @property string $name
 * @property string $logo
 * @property string $aboutus
 * @property string $contact
 * @property string $email
 * @property string $address
 * @property string $salt
 * @property string $merchant_key
 * @property string $payment_url
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Sites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'aboutus', 'contact', 'email', 'address','welcome' ], 'required'],
            [['contact', ], 'integer'],
            
            [['name', 'logo',  'email', 'address', 'welcome'], 'string', 'max' => 255],
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
            'logo' => 'Aboutus Image',
            'aboutus' => 'Aboutus',
            'contact' => 'Contact',
            'email' => 'Email',
            'address' => 'Address',
            'welcome' => 'Welcome Text',
           
            
        ];
    }
}
