<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subproducts */

$this->title = 'Create Subproducts';
$this->params['breadcrumbs'][] = ['label' => 'Subproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subproducts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
