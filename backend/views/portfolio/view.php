<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Portfolio */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="portfolio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O`chirish', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            'category',
            'description:ntext',
            [
                'attribute'=>'created_at',
                'format'=>'raw',
                'value'=>function($model){
                    return date('Y-m-d H:i:s', $model->created_at);
                }
            ],
            [
                'attribute'=>'updated_at',
                'format'=>'raw',
                'value'=>function($model){
                    if($model->updated_at == null){
                        return "<b style='color: orange;'>Yangilanmagan</b>";
                    }
                    return date('Y-m-d H:i:s', $model->updated_at);
                }
            ],
            [
                'attribute'=>'images',
                'format'=>'html',
                'value'=>function ($model){
                    return "<img src='/upload/$model->images' style='width: 300px; height: 200px;'>";
                }
            ]
        ],
    ]) ?>

</div>
