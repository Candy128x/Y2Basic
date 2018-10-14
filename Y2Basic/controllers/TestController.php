<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\DemoForm;
use app\models\Users;

class TestController extends Controller
{
    public function actionHelloPhp()
    {
        return 'Hello PHP Developer..';
    }

    public function actionDemoForm()
    {
        $model = new DemoForm();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            //all are good
            Yii::$app->session->setFlash('success', 'You have Enter Data Correctly');
        }
        
        return $this->render('demoForm', ['model'=>$model]);
    }

    public function actionIndex()
    {
        echo 'i m in TestConmtroller..';
    }

    public function actionUserListing()
    {
        $users = Users::find()->all();
        // var_dump($users);
        return $this->render('userListing', ['users'=>$users]);
    }
}
