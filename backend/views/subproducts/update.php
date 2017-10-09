<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Subproducts */

$this->title = 'Update Subproducts: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subproducts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
