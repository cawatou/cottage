<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'cat_id',
            'img',
            'price',
            // 'square',
            // 'project',
            // 'complectation',
            // 'material',
            // 'floor',
            // 'roof',
            // 'facing',
            // 'consist',
            // 'width',
            // 'lenght',
            // 'place',
            // 'f_square',
            // 'type',
            // 'extra_work',
            // 'gallery',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
