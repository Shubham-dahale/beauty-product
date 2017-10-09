<?php

namespace backend\controllers;

use Yii;
use common\models\Subproducts;
use common\models\SubproductsSearch;
use common\models\Productquantity;
use common\models\ProductquantitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Products;
use yii\web\UploadedFile;/**

 * SubproductsController implements the CRUD actions for Subproducts model.
 */
class SubproductsController extends Controller
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
     * Lists all Subproducts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubproductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Subproducts model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = new Subproducts(); 
        $model = $model->find()->where(['id'=>$id])->with('productquantity')->one(); 
         return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Subproducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Subproducts();
        

        if ($model->load(Yii::$app->request->post())) {
            //print_r($model->load(Yii::$app->request->post()));
            //cho "hiii";
            //echo $model->product_qtity;
            //echo "bbb";
           //   print_r('<pre>');
           // print_r($model);
           // print_r('<pre>');exit;
            
         
            $imageName = "subproduct_image_".rand();
            $model->subproduct_img = UploadedFile::getInstance($model,'subproduct_img');
          
            if(!empty($model->subproduct_img)){      
                $model->subproduct_img->saveAs('../images/subproduct/'.$imageName.'.'.$model->subproduct_img->extension);
                $model->subproduct_img = 'subproduct/'.$imageName.'.'.$model->subproduct_img->extension;
            }
            // $model->product_select=Yii::$app->products->identity->description;
                                        $prodQunatity = new Productquantity();
                
            
            if($model->save())
            {  
           //      print_r('<pre>');
           // print_r($model);
           // print_r('<pre>');
           // exit;
                foreach(Yii::$app->request->post("product_qtity") as $pq)
                {
                    
                     $prodQuantity = new Productquantity();
                    $prodQuantity->product_quantity =  $pq;
                    $prodQuantity->subproduct_id = $model->id; 
                    $prodQuantity->save(false); 

                }
                return $this->redirect(['view', 'id' => $model->id]);

            }
           
           
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Subproducts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         $s1 = $model->subproduct_img;

        if ($model->load(Yii::$app->request->post()) ) {
          //   print_r('<pre>');
          //  print_r($model);
          //  print_r('<pre>');
          // exit;
            
            $imageName = "subproduct_image_".rand();
            $model->subproduct_img = UploadedFile::getInstance($model,'subproduct_img');
            if(!empty($model->subproduct_img)){
                $model->subproduct_img->saveAs('../images/subproduct/'.$imageName.'.'.$model->subproduct_img->extension);
                $model->subproduct_img = 'subproduct/'.$imageName.'.'.$model->subproduct_img->extension;
               
           
            }
             else{
                $model->subproduct_img = $s1;
            }
            if( $model->save()){

          

                        $w=new Productquantity();
                        

                       Productquantity::deleteAll(['subproduct_id'=>$id]);

          //            print_r('<pre>');
          //  print_r($s);
          //  print_r('<pre>');
          // exit;
                        
                       

                      

                    

                    foreach(Yii::$app->request->post("product_qtity") as $pq)
                {
                    
                     $prodQuantity = new Productquantity();
                    $prodQuantity->product_quantity =  $pq;
                    $prodQuantity->subproduct_id = $model->id; 
                    $prodQuantity->save(false); 

                }

                    

            
                return $this->redirect(['view', 'id' => $model->id]);
            }
        
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
  }

    /**
     * Deletes an existing Subproducts model.
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
     * Finds the Subproducts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Subproducts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subproducts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
