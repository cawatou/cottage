<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'title',
            'img',
            'description:ntext',
            

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view} {update}',],
        ],
        'options' => ['style' => 'width: 25;'],
    ]); ?>
</div>
