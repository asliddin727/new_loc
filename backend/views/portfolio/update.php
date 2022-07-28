<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Portfolio */

$this->title = 'Yangilash: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Portfolio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="portfolio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
