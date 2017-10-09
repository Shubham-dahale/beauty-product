<?php

namespace backend\controllers;

use Yii;
use common\models\Products;
use common\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   public function actionCreate()
    {
        $model = new Products();

        if ($model->load(Yii::$app->request->post())) {
           
            $imageName = "product_image_".rand();
            $model->imgdisplay = UploadedFile::getInstance($model,'imgdisplay');
             
          
            if(!empty($model->imgdisplay)){      
                $model->imgdisplay->saveAs('images/products/imagedisplay/'.$imageName.'.'.$model->imgdisplay->extension);
                $model->imgdisplay = $imageName.'.'.$model->imgdisplay->extension;
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
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
   public function actionUpdate($id)
    {
        $model = $this->findModel($id);
                $s1 = $model->imgdisplay;
                 $s2 = $model->img1;
                  $s3 = $model->img2;
                   $s4 = $model->img3;
        if ($model->load(Yii::$app->request->post())) {
            $imageName = "product_image_".rand();
            // $model->image = UploadedFile::getInstance($model,'image');
            $model->imgdisplay = UploadedFile::getInstance($model,'imgdisplay');
             $model->img1 = UploadedFile::getInstance($model,'img1');
              $model->img2 = UploadedFile::getInstance($model,'img2');
               $model->img3 = UploadedFile::getInstance($model,'img3');
            
             if(!empty($model->imgdisplay)){      
                $model->imgdisplay->saveAs('images/products/imagedisplay/'.$imageName.'.'.$model->imgdisplay->extension);
                $model->imgdisplay = $imageName.'.'.$model->imgdisplay->extension;
            }
            else{
                $model->imgdisplay = $s1;
            }
                 if(!empty($model->img1)){      
                $model->img1->saveAs('images/products/img1/'.$imageName.'.'.$model->img1->extension);
                $model->img1 = $imageName.'.'.$model->img1->extension;
            }
             else{
                $model->img1 = $s2;
            }

             if(!empty($model->img2)){      
                $model->img2->saveAs('images/products/img2/'.$imageName.'.'.$model->img2->extension);
                $model->img2= $imageName.'.'.$model->img2->extension;
            }
             else{
                $model->img2 = $s3;
            }


             if(!empty($model->img3)){      
                $model->img3->saveAs('images/products/img3/'.$imageName.'.'.$model->img3->extension);
                $model->img3 = $imageName.'.'.$model->img3->extension;
            }else{
                    $model->img3 = $s4;
                }
             $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
