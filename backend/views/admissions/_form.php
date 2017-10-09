<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Helper;
/* @var $this yii\web\View */
/* @var $model common\models\Admissions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admissions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bloodgrp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mo_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g_mo_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'college_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_deleted')->dropDownList(Helper::getActiveInActiveStatus(),['prompt'=>'select status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
