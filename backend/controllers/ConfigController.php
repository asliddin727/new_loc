<?php

namespace backend\controllers;

use backend\models\Config;
use backend\models\search\ConfigSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConfigController implements the CRUD actions for Config model.
 */
class ConfigController extends AuthController
{

   
    public function actionUpdate()
    {
        $model = $this->findModel();

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['config/update']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    
    protected function findModel()
    {
        if (($model = Config::findOne(['id' => 1])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
