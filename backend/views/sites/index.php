<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
            'attribute'=>'About_image',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('../images/'.$data['logo'],['width'=>'150px','class'=>'img-respnsive thumbnail']);
            },
            ],
            'aboutus',
            'contact',
            'email:email',
            'welcome',
            // 'address',
            // 'salt',
            // 'merchant_key',
            // 'payment_url:url',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
