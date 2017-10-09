<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Subproducts */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subproducts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);


         ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            
           [   
            'attribute'=>'subproduct_img',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('../images/'.$data['subproduct_img'],['width'=>'180px','class'=>'img-respnsive thumbnail']);
            },
            ],
            ['attribute'=>'product_select',
             'value'=>function($model){
                return (isset($model->products))?$model->products->description:"unknown"; 
             }],

            'subproduct_name',
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
        ],
    ]) ?>

</div>
