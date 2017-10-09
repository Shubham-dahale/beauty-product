<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Admissions */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Admissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admissions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
            'dob',
            'bloodgrp',
            'address',
            'mo_no',
            'g_name',
            'g_address',
            'g_mo_no',
            'college_name',
            'class',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            'is_deleted',
        ],
    ]) ?>

</div>
