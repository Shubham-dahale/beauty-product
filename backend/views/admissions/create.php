<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Admissions */

$this->title = 'Create Admissions';
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admissions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
