<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subproducts;

/**
 * SubproductsSearch represents the model behind the search form about `common\models\Subproducts`.
 */
class SubproductsSearch extends Subproducts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',  'product_select'], 'integer'],
            [['subproduct_img', 'subproduct_name','subproduct_desc'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Subproducts::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
           
            'product_select' => $this->product_select,
        ]);

        $query->andFilterWhere(['like', 'subproduct_img', $this->subproduct_img])
            ->andFilterWhere(['like', 'subproduct_desc', $this->subproduct_desc])
       
            ->andFilterWhere(['like', 'subproduct_name', $this->subproduct_name]);

        return $dataProvider;
    }
}
