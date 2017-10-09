<?php

namespace backend\controllers;

use Yii;
use common\models\Sliders;
use common\models\SlidersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * SlidersController implements the CRUD actions for Sliders model.
 */
class SlidersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sliders models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SlidersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sliders model.
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
     * Creates a new Sliders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sliders();

        if ($model->load(Yii::$app->request->post())) {
           
            $imageName = "slider_image_".rand();
            $model->image_file = UploadedFile::getInstance($model,'image_file');
          
            if(!empty($model->image_file)){      
                $model->image_file->saveAs('../images/sliders/'.$imageName.'.'.$model->image_file->extension);
                $model->image_file = 'sliders/'.$imageName.'.'.$model->image_file->extension;
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
     * Updates an existing Sliders model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            $imageName = "slider_image_".rand();
            $model->image_file = UploadedFile::getInstance($model,'image_file');
            if(!empty($model->image_file)){
                $model->image_file->saveAs('../images/sliders/'.$imageName.'.'.$model->image_file->extension);
                $model->image_file = 'sliders/'.$imageName.'.'.$model->image_file->extension;
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
           
            }else{
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sliders model.
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
     * Finds the Sliders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Sliders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sliders::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
