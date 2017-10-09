<?php

namespace backend\modules\api\controllers;

class EmployeeController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	echo'test';exit;
        return $this->render('index');
    }

}
