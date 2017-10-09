<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Contacts;
use common\models\Sites; 
use common\models\Gallery; 
use common\models\Plans; 
use common\models\Sliders;
use common\models\Testimonials; 
use common\models\Facilities;   
use common\models\Admissions;
use common\models\Enquiry; 
use common\models\Products; 
use common\models\ProductsSearch;  
use common\models\Subproducts; 
use common\models\SubproductsSearch; 
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @inheritdoc
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

    public function beforeAction($action)
{            
    if ($action->id == 'search' || $action->id == 'makepayment' ||  $action->id == "paymentfail" ||  $action->id == "paymentsuccess") {
        $this->enableCsrfValidation = false;
    }
    return parent::beforeAction($action);
}
  public function actionPaymentsuccess()
{
    print_r($_REQUEST);
    exit;
    // $model = new PaidProfiles();
    // $dump = serialize($_REQUEST);
    // $model->user_id=Yii::$app->user->identity->id;
    // $model->paid_for_profile_id=$_REQUEST['pid'];
    // $model->date = $_REQUEST['addedon'];
    // $model->status=1;
    // $model->bank_ref_num=$_REQUEST['bank_ref_num'];
    // $model->bankcode=$_REQUEST['bankcode'];
    // $model->unmappedstatus=$_REQUEST['unmappedstatus'];
    // $model->addedon = $_REQUEST['addedon'];
    // $model->mihpayid = $_REQUEST['mihpayid'];
    // $model->dump_response = $dump;
    // $phone = $_REQUEST['phone'];        
    // $msg = "Successfully register for vishwashanti"; 
    // $resArr = array(); 
    // $response = Yii::$app->SmsResponse->getResponse($phone,$msg);        
    //  $resArr = json_decode($response);
    // if($model->save()){
    
    //      if(isset($resArr)){              
    //             $smsresponse->error_code = $resArr->ErrorCode;
    //             $smsresponse->error_message = $resArr->ErrorMessage;
    //             $smsresponse->jobid = $resArr->JobId;
    //             $smsresponse->number = $resArr->MessageData[0]->Number;
    //             $smsresponse->msg_id = $resArr->MessageData[0]->MessageParts[0]->MsgId;
    //             $smsresponse->part_id = $resArr->MessageData[0]->MessageParts[0]->PartId;
    //             $smsresponse->message = $resArr->MessageData[0]->MessageParts[0]->Text;
    //             $smsresponse->save();
    //      }
    
    // }
    // return $this->redirect(['profile/view', 'id' => $pid]);
}
 public function actionPaymentfail()
{
    print_r($_REQUEST);
    exit;
    // $model = new PaidProfiles();
    // $smsresponse = new SmsResponse();
    // $dump = serialize($_REQUEST);
    // $model->user_id=Yii::$app->user->identity->id;
    // $model->paid_for_profile_id=$_REQUEST['pid'];;
    // $model->date = $_REQUEST['addedon'];
    // $model->status=0;
    // $model->bank_ref_num=$_REQUEST['bank_ref_num'];
    // $model->bankcode=$_REQUEST['bankcode'];
    // $model->unmappedstatus=$_REQUEST['unmappedstatus'];
    // $model->addedon = $_REQUEST['addedon'];
    // $model->mihpayid = $_REQUEST['mihpayid'];
    // $model->dump_response = $dump;        
      
    // $model->save();    
    // return $this->redirect(['profile/view', 'id' => $pid]);
}
  public function actionMakePayment()
    {
        //echo $pid;exit;

       
        //print_r($profile);exit;   
        //print_r($user);exit;
      return $this->render('make-payment');
        
    }





    /**
     * Displays homepage.
     *
     * @return mixed
     */




    public function actionIndex()
    {
        $producta=new Products();
        $model=new Sites();
        $w = $model->find()->where(['id'=>1])->all();
        
        $p=Products::find()->all();
         // print_r('<pre>');
         //   print_r($p);
         //   print_r('<pre>');
         //  exit;
        $plans = new Plans();
        $sliders = new Sliders();
        $testimonials = new Testimonials();
        $facilities = new Facilities();
        $model = new Enquiry(); 
        $reviews = $testimonials->find()->where(['is_deleted'=>1])->all();
        // print_r("<pre>");
                                // print_r($reviews);
                                //                      print_r("<pre>");
                                // exit;
        $sliders = $sliders->find()->where(['is_deleted'=>1])->all();
        $facility = $facilities->find()->joinWith('masters')->where(['is_deleted'=>1])->all();
        $plan = $plans->find()->where(['is_deleted'=>1])->all();

         if ($model->load(Yii::$app->request->post()) && $model->save()) {
           Yii::$app->session->setFlash('success', "Thank you !!! We wil contact you soon.");
         }


        return $this->render('index',['model'=>$model,'plan'=>$plan,'reviews'=>$reviews,'sliders'=>$sliders,'facility'=>$facility, 'products'=>$p,'w'=>$w]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        $contact=new Contacts();
        // print_r($model);exit;
        $sites = new Sites();
        $site = $sites->find()->where(['id'=>1])->all();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $contact->name=$model->name;
            $contact->email=$model->email;
            $contact->body=$model->body;
           //print_r($contact); 
            $contact->save(false);

            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
                'site' => $site
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {   $sites = new Sites();
        $site = $sites->find()->where(['id'=>1])->all();
        return $this->render('about',['site' => $site]);
    }
///////    
    public function actionProduct($id)
    {
        $model = new Subproducts();

       
        $sl = Subproducts::find()->where(['id'=>$id])->with('productquantity')->one();

        $s2=Subproducts::findOne($id)->productquantity;
        // print_r('<pre>');
        // print_r($sl1);
        // print_r('<pre>');
        // exit;
       

        return $this->render('list_item', ['products'=>$sl,'prod'=>$s2]);
        
    }
     public function actionSubproduct($id)
    {
        
       $model1=new Subproducts();
       $model2 = new products();
       $product = $model2->find()->where(['id'=>$id])->one(); 

       $model1->mainproduct = $model2->description;
        $data = $model1::find()
             ->where(['product_select'=> $id])->with('products')->all();
        // $sl=Products::findOne($id);
        // print_r('<pre>');
        // print_r($data);
        // print_r('<pre>');
        // exit;
       

        return $this->render('subpro', ['model1'=>$data,'product'=>$product]);
        
    }
    public function actionProducts()
    {
        // $facilities = new Facilities();
        // $facility = $facilities->find()->joinWith('masters')->where(['is_deleted'=>1])->all();
        // return $this->render('facilities',['facility'=>$facility]);

         $searchTeam = new ProductsSearch();
        $dataProvider = $searchTeam->search(Yii::$app->request->queryParams);
          return $this->render('product',['searchTeam'=>$searchTeam,'dataProvider'=>$dataProvider]);

    }
    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
