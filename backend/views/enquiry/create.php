<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Enquiry */

$this->title = 'Create Enquiry';
$this->params['breadcrumbs'][] = ['label' => 'Enquiries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enquiry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
