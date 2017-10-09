<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdmissionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admissions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'bloodgrp') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'mo_no') ?>

    <?php // echo $form->field($model, 'g_name') ?>

    <?php // echo $form->field($model, 'g_address') ?>

    <?php // echo $form->field($model, 'g_mo_no') ?>

    <?php // echo $form->field($model, 'college_name') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
