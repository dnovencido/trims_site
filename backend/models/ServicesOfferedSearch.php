<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ServicesOffered;

/**
 * ServicesOfferedSearch represents the model behind the search form about `backend\models\ServicesOffered`.
 */
class ServicesOfferedSearch extends ServicesOffered
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'services_desc_id'], 'integer'],
            [['service_offered_desc'], 'safe'],
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
        $query = ServicesOffered::find();

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
            'services_desc_id' => $this->services_desc_id,
        ]);

        $query->andFilterWhere(['like', 'service_offered_desc', $this->service_offered_desc]);

        return $dataProvider;
    }
}
