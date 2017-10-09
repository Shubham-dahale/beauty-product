<?php

namespace backend\controllers;

use Yii;
use common\models\Facilities;
use common\models\FacilitiesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * FacilitiesController implements the CRUD actions for Facilities model.
 */
class FacilitiesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
         return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','view','update','delete','logout'],
                'rules' => [
                    [
                        'actions' => ['index','create','view','update','delete','logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['POST'],
                ],
            ],
        
        ];
    }

    /**
     * Lists all Facilities models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FacilitiesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Facilities model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Facilities model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Facilities();

        if ($model->load(Yii::$app->request->post())) {
            
            $imageName = "facilities_image_".rand();
            $model->images = UploadedFile::getInstance($model,'images');
          
            if(!empty($model->images)){      
                $model->images->saveAs('../images/facilities/'.$imageName.'.'.$model->images->extension);
                $model->images = 'facilities/'.$imageName.'.'.$model->images->extension;
            }

        
            $model->save();
          
          
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Facilities model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           
            $imageName = "facilities_image_".rand();
            $model->images = UploadedFile::getInstance($model,'images');
            if(!empty($model->images)){
                $model->images->saveAs('../images/facilities/'.$imageName.'.'.$model->images->extension);
                $model->images = 'facilities/'.$imageName.'.'.$model->images->extension;
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
           
            }else{
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
            }
       
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Facilities model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Facilities model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Facilities the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Facilities::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
