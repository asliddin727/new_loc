<?php

namespace backend\controllers;

use backend\models\Messages;
use backend\models\search\MessageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * MessageController implements the CRUD actions for Messages model.
 */
class MessageController extends AuthController
{
   
    public function actionIndex()
    {
        $searchModel = new MessageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        $message = Messages::findOne(['id'=>$id]);
        $message->status = 1;
        $message->save();

        if (($message = Messages::findOne(['id' => $id])) !== null) {
            return $message;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
