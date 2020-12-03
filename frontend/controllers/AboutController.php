<?php

namespace frontend\controllers;

class AboutController extends \yii\web\Controller
{
    public function actionAbout()
    {
        return $this->render('about');
    }

}
