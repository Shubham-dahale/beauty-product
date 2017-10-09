<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sites;

/**
 * SitesSearch represents the model behind the search form about `common\models\Sites`.
 */
class SitesSearch extends Sites
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'contact'], 'integer'],
            [['name', 'logo', 'aboutus', 'email', 'address','welcome'], 'safe'],
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
        $query = Sites::find();

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
            'contact' => $this->contact,
           
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'aboutus', $this->aboutus])
            ->andFilterWhere(['like', 'email', $this->email])
             ->andFilterWhere(['like', 'welcome', $this->welcome])
            ->andFilterWhere(['like', 'address', $this->address]);
            

        return $dataProvider;
    }
}
