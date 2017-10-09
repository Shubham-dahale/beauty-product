<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
             [
            'attribute'=>'imgdisplay',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('images/products/imagedisplay/'.$data['imgdisplay'],['width'=>'150px','class'=>'img-respnsive thumbnail']);
            },
            ],
            
            'description',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
