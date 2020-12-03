<?php

namespace frontend\controllers;

class WorkController extends \yii\web\Controller
{
    public function actionWork()
    {
        return $this->render('work');
    }
     public function actionPortfoliodetails()
    {
        return $this->render('potfoliodetails');
    }

}