<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\db\ActiveRecord;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\Test;


use app\models\Category;
use app\models\Page;
use app\models\Item;
use app\models\Gallery;
use app\models\Contacts;
date_default_timezone_set('Europe/Moscow');

class SiteController extends AppController{

    public function behaviors(){
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    public function actions(){
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


    public function actionIndex(){
        $model = Category::find()->all();
        $form_model = new ContactForm();
        if ($form_model->load(Yii::$app->request->post()) && $form_model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionAbout(){
        $model = Page::findOne(1);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    public function actionServices(){
        $model = Page::findOne(2);
        return $this->render('services', [
            'model' => $model,
        ]);
    }

    public function actionPortfolio(){
        $cat_model = Category::find()->all();
        $item_model = Item::find()->all();
        return $this->render('portfolio', [
            'cat_model' => $cat_model,
            'item_model' => $item_model,
        ]);
    }

    public function actionItem($id){
        $item_model = Item::find()->where(['id'=> $id])->one();
        $gallery_model = Gallery::find()->where(['item_id'=> $id])->all();
        foreach($gallery_model as $image) $gallery_img[$image->item_id][] = $image->src;
        // Отправка формы из карточки товара
        $form_model = new ContactForm();
        if ($form_model->load(Yii::$app->request->post()) && $form_model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }

        return $this->render('item', [
            'item_model' => $item_model,
            'gallery_model' => $gallery_model,
        ]);
    }

    public function actionContacts(){
        $contact_model = Contacts::find()->one();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'contact_model' => $contact_model,
        ]);
    }

    public function actionCallbacksend(){
        if(isset($_REQUEST['phone']) && $_REQUEST['phone'] != ''){
            $message = 'Phone: ' . $_REQUEST['phone'] . '<br>';
            //file_put_contents($_SERVER['DOCUMENT_ROOT'].'/tt.txt', print_r($message, 1));
            // Переписать в модель
            Yii::$app->mailer->compose()
                ->setFrom('no-replay@gmail.com')
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('Callback')
                ->setHtmlBody($message)
                ->send();

            return 'done';
        }else{
            return 'error';
        }

    }
}