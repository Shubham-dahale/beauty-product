<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdmissionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admissions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Admissions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'dob',
            'bloodgrp',
            'address',
            // 'mo_no',
            // 'g_name',
            // 'g_address',
            // 'g_mo_no',
            // 'college_name',
            // 'class',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
