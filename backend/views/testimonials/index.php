<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TestimonialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Testimonials', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'content:ntext',
            'author',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',
            'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
