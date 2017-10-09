<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Admissions;

/**
 * AdmissionsSearch represents the model behind the search form about `common\models\Admissions`.
 */
class AdmissionsSearch extends Admissions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mo_no', 'g_mo_no', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['name', 'dob', 'bloodgrp', 'address', 'g_name', 'g_address', 'college_name', 'class', 'created_at', 'updated_at'], 'safe'],
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
        $query = Admissions::find();

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
            'mo_no' => $this->mo_no,
            'g_mo_no' => $this->g_mo_no,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'bloodgrp', $this->bloodgrp])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'g_name', $this->g_name])
            ->andFilterWhere(['like', 'g_address', $this->g_address])
            ->andFilterWhere(['like', 'college_name', $this->college_name])
            ->andFilterWhere(['like', 'class', $this->class]);

        return $dataProvider;
    }
}
