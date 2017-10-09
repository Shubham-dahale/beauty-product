<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubproductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subproducts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subproducts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subproducts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br><br><br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
           
            [
            'attribute'=>'subproduct_img',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('../images/'.$data['subproduct_img'],['width'=>'200px','class'=>'img-respnsive thumbnail']);
            },
            ],
            
            'subproduct_name',
            ['attribute'=>'product_select',
             'value'=>function($model){
                return (isset($model->products))?$model->products->description:"unknown"; 
             }],
             'subproduct_desc',
             ['attribute'=>'productquantity',
             'value'=>function($model){
                $pq = [] ;

                foreach($model->productquantity as $p)
                {
                    $pq[]= $p['product_quantity'];
                }
                return implode(',',$pq); 
             }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
