<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Config */

$this->title = "Konfiguratsiyalarni Yagilash";
$this->params['breadcrumbs'][] = ['label' => 'Konfiguratsiyalar', 'url' => ['update']];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
