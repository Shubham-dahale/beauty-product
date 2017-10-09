<?php

namespace common\models;

use Yii;
use common\models\Productquantity;

/**
 * This is the model class for table "subproducts".
 *
 * @property string $id
 
 * @property string $subproduct_img
 * @property integer $product_select
 * @property string $subproduct_name
 */
class Subproducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subproducts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'subproduct_img', 'product_select', 'subproduct_name'], 'required'],
            [[ 'product_select'], 'integer'],
            [['subproduct_img', 'subproduct_name','subproduct_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            
            'subproduct_img' => 'Subproduct Img',
            'product_select' => 'Product Select',
            'subproduct_name' => 'Subproduct Name',
            'subproduct_desc' => 'Subproduct Description',
        ];
    }
    public function getProducts()
    {
        return $this->hasOne(Products::className(),['id'=>'product_select']);

    }
     

       public function getProductquantity()
    {
        return $this->hasMany(Productquantity::className(), ['subproduct_id' => 'id']);
    }
 
}
