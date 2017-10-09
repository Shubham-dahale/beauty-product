<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productquantity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productquantity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subproduct_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_quantity')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
