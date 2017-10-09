<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Helper;
/* @var $this yii\web\View */
/* @var $model common\models\Masters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masters-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?php 
        $parent=ArrayHelper::map(\common\models\Masters::find()->where(['parent_id'=>0])->asArray()->all(), 'id', 'name');
        echo  $form->field($model, 'parent_id')->dropDownList($parent,['prompt'=>'select parent']) 
    ?> 

    
<?= $form->field($model, 'is_active')->dropDownList(Helper::getActiveInActiveStatus(),['prompt'=>'select status']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
