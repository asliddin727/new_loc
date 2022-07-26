<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Messages */

$this->title = $model->fullName;
$this->params['breadcrumbs'][] = ['label' => 'Xabarlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="messages-view">

    <h1><?= $model->fullName ?></h1>

    <p>
        <?= Html::a('Orqaga qaytish', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullName',
            'email:email',
            'phone',
            'description:ntext',
            [
                'attribute'=>'status',
                'format'=>'raw',
                'value'=>function($model){
                    if($model->status == 0){
                        return "<b style='color: green;'>Yangi xabar</b>";
                    }else{
                        return "<b style='color: red;'>O'qilgan xabar</b>";
                    }
                }
            ],
            'created_at',
        ],
    ]) ?>

</div>
