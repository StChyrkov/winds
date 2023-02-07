<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
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

    public function beforeAction($action)
    {
        // print_r($action);
        // die;
        $request = Yii::$app->request;
        $lang = $request->get('lang', 'uk'); 
        Yii::$app->language=$lang;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@app/views/site/error.php'
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
    public function actionIndex()
    {   
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays programs page.
     *
     * @return string
     */
    public function actionPrograms()
    {
        return $this->render('programs');
    }

    /**
     * Displays media page.
     *
     * @return string
     */
    public function actionMedia()
    {
        return $this->render('media');
    }

    /**
     * Displays partners page.
     *
     * @return string
     */
    public function actionPartners()
    {
        return $this->render('partners');
    }

    /**
     * Displays donate page.
     *
     * @return string
     */
    public function actionDonate()
    {
        return $this->render('donate');
    }

    /**
     * Displays privacy page.
     *
     * @return string
     */
    public function actionPrivacy()
    {
        return $this->render('privacy');
    }

    public function actionPurchases()
    {
        return $this->render('purchases');
    }

    public function actionActivePurchases()
    {
        return $this->render('active-purchases');
    }

    public function actionArchivePurchases()
    {
        return $this->render('archive-purchases');
    }

    public function actionPurchase1()
    {
        return $this->render('purchase-1');
    }

    public function actionPurchase2()
    {
        return $this->render('purchase-2');
    }

    public function actionPurchase3()
    {
        return $this->render('purchase-3');
    }

    public function actionPurchase4()
    {
        return $this->render('purchase-4');
    }

    public function actionPurchase5()
    {
        return $this->render('purchase-5');
    }

    public function actionPurchase6()
    {
        return $this->render('purchase-6');
    }

    public function actionPurchase7()
    {
        return $this->render('purchase-7');
    }

    public function actionPurchase8()
    {
        return $this->render('purchase-8');
    }

    public function actionPurchase9()
    {
        return $this->render('purchase-9');
    }

    public function actionPurchase10()
    {
        return $this->render('purchase-10');
    }

    public function actionPurchase11()
    {
        return $this->render('purchase-11');
    }

    public function actionPurchase12()
    {
        return $this->render('purchase-12');
    }

    public function actionPurchase13()
    {
        return $this->render('purchase-13');
    }

}
