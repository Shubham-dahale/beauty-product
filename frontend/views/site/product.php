<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Product';
// $this->params['breadcrumbs'][] = $this->title;
?>
<!-- breadcrumb -->
  <div class="w3_breadcrumb">
  <div class="breadcrumb-inner">  
      <ul>
        <li><?= Html::a('Home ', ['/site/index'], []) ?><i>/</i> </li>
        <li><?= $this ->title ?></li>
      </ul>
    </div>
  </div>
  </br>
  </br></br>
<!-- //breadcrumb -->
<h3 class="tittle">Products</h3>
 <div class="container containerpro" > 
<div class="row">
  <?= 
    \yii\widgets\ListView::widget([
      'dataProvider' => $dataProvider,
      'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
      ],
      'layout' => "{summary}\n<div class='row'>{items}</div>\n\n<div class='row'>{pager}</div>",
      'itemView' => '_pro',
    ]);
  ?>
</div>  






