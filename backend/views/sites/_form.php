<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Helper;
/* @var $this yii\web\View */
/* @var $model common\models\Sites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aboutus')->textInput(['maxlength' => true,'style'=>'width:900px;height:200px;']) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'welcome')->textInput(['maxlength' => true]) ?>

   


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
