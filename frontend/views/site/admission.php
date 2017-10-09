<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Admissions */
/* @var $form ActiveForm */
?>
<div class="site-admission">

    <div class="container-fluid">
        <div class="col-md-6">
        <!--rules and regulations-->
            <h3>Rules and Regulations</h3>
        
        </div>
        <div class="col-md-6">
        <h3>Admission Form</h3>
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name') ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'dob') ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'bloodgrp') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'address') ?>    
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'mo_no') ?>        
                </div>
            </div>
            <?= $form->field($model, 'g_name') ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'g_address') ?>    
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'g_mo_no') ?>        
                </div>
            </div>           
            <?= $form->field($model, 'college_name') ?>
            <?= $form->field($model, 'class') ?>
        
        
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
        </div>
    </div>
</div><!-- site-admission -->
