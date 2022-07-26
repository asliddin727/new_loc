<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Messages;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xabarlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Qidiruv
                </a>
            </p>
                <div class="col-md-6">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                        </div>
                    </div>
                </div>
          

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fullName',
            'email:email',
            'phone',
            // 'description:ntext',
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Messages $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },

                 'template'=>'{view}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
