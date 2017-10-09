<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $imgdisplay
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $description
 * @property string $innerdescription
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imgdisplay',  'description'], 'required'],
            [['imgdisplay',  'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imgdisplay' => 'Imgdisplay',
            
            'description' => 'Product Name ',
            
        ];
    }
}
