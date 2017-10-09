<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Helper;
/* @var $this yii\web\View */
/* @var $model common\models\Sliders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sliders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'caption')->textarea(['rows' => 6]) ?>

     <?= $form->field($model, 'image_file')->fileInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'is_deleted')->dropDownList(Helper::getActiveInActiveStatus(),['prompt'=>'select status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
