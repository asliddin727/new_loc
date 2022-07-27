<?php

namespace frontend\controllers;

use backend\models\Messages;
use backend\models\Team;
use common\models\Config;
use frontend\models\Portfolio;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends AppController
{


    

    public function actionIndex()
    {
        $team = new Team();

       $message = new Messages(); 
       if($this->request->isPost){

       
            if($message->load(Yii::$app->request->post()) && $message->validate()){
                $message->created_at = date('Y-m-d H:i:s');
                $message->save();
                Yii::$app->session->setFlash('success', 'Xabaringiz yuborildi! Tez orada xodimlarimiz siz bilan bog`lanishadi!!!');
                // return $this->redirect(['site/index#contact']);
            } else {
                Yii::$app->session->setFlash('error', 'Xabaringiz yuborilmadi! Iltimos qayta urinib ko`ring!!!');
                return $this->redirect(['site/index#contact']);
            }
        }
       return $this->render('index', compact('message', 'team'));
    }



    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    
}
