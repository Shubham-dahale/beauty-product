<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\SubproductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subproducts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    

     <?php 
        $parent=ArrayHelper::map(\common\models\Products::find()->asArray()->all(), 'id', 'description');
        echo  $form->field($model, 'product_select')->dropDownList($parent,['prompt'=>'Product Category']) 
    ?> 
    

    <?= $form->field($model, 'subproduct_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
