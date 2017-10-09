<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productquantity".
 *
 * @property string $id
 * @property string $subproduct_id
 * @property string $product_quantity
 */
class Productquantity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productquantity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'product_quantity'], 'required'],
            [['subproduct_id'], 'integer'],
            [['product_quantity'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subproduct_id' => 'Subproduct ID',
            'product_quantity' => 'Product Quantity',
        ];
    }
}
