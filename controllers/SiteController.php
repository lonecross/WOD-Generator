<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\Girl;
use app\models\Hero;
use app\models\Movement;
use app\models\Repscheme;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
	
	public function actionHero()
    {
        return $this->render('hero', [
			'heros' => Hero::find()->asArray()->all(),
		]);
    }
	
	public function actionGirl()
    {
        return $this->render('girl', [
			'girls' => Girl::find()->asArray()->all(),
		]);
    }
	
	public function actionCustom()
    {
        return $this->render('custom');
    }

    

    
}
