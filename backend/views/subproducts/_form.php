<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Products;
/* @var $this yii\web\View */
/* @var $model common\models\Subproducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subproducts-form">

    <?php $form = ActiveForm::begin(); ?>

<script type="text/javascript">

    function add(){
                var element = document.createElement("input");

                var label = document.createElement("Label");
                label.innerHTML = "Packaging";     

                element.setAttribute("type", "text");
                element.setAttribute("value", "");
                element.setAttribute("name", "product_qtity[]");
                element.setAttribute("style", "width:200px");
                element.setAttribute("placeholder", "ex.5Lit");

                label.setAttribute("style", "font-weight:normal;padding:7px;font-weight:bold");

                var foo = document.getElementById("fooBar");

                foo.appendChild(label);
                foo.appendChild(element);


    }
</script>   

    <?= $form->field($model, 'subproduct_img')->fileInput(['maxlength' => true]) ?>

     <?php 
        $parent=ArrayHelper::map(\common\models\Products::find()->asArray()->all(), 'id', 'description');
        echo  $form->field($model, 'product_select')->dropDownList($parent,['prompt'=>'Product Category']) 
    ?> 


    

    <?= $form->field($model, 'subproduct_name')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'subproduct_desc')->textInput(['maxlength' => true]) ?>
   
    <div class=quan>
    <label>Available packaging</label>

     <input type="button" value="Add" class="btn btn-success" onclick="add();"/>  
     </div>  	

    <span id="fooBar">&nbsp;<br/></span>
    <br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
