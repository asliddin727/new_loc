<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Portfolio */

$this->title = 'Portfolio qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Portfolio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
