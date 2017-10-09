<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Enquiry;

/**
 * EnquirySearch represents the model behind the search form about `common\models\Enquiry`.
 */
class EnquirySearch extends Enquiry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mobile_no', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['name', 'email', 'room_type', 'optional','created_at', 'updated_at'], 'safe'],
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
        $query = Enquiry::find();

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
            'mobile_no' => $this->mobile_no,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'optional', $this->optional])
            ->andFilterWhere(['like', 'room_type', $this->room_type]);

        return $dataProvider;
    }
}
