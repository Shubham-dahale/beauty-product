<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productquantity */

$this->title = 'Create Productquantity';
$this->params['breadcrumbs'][] = ['label' => 'Productquantities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productquantity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
