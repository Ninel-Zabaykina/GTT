<?php

namespace app\controllers;

use app\models\File;
use app\models\Message;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class FileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionFile()
    {
        $audio = new File();

//        if ($audio->load(Yii::$app->request->post()) && $audio->validate()) {
//            $audio->audioFile->saveAs('web/audio/'.$audio->audioFile->baseName.$audio->ex);
//            }
//        }
        if (Yii::$app->request->post()) {
            $audio->audioFile = UploadedFile::getInstance($audio, 'audioFile');
            if ($audio->upload()) {
                // file is uploaded successfully
                return $this->render('index', ['audio' => $audio]);
            }
        }
//        return $this->render('index', compact('audio'));
        return $this->render('index', ['audio' => $audio]);
    }


}
