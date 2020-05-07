<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Type;

/**
 * KpiTypeSearch represents the model behind the search form of `app\models\Type`.
 */
class TypeSearch extends Type
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_type_id'], 'integer'],
            [['kpi_type_name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Type::find();

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
            'kpi_type_id' => $this->kpi_type_id,
        ]);

        $query->andFilterWhere(['like', 'kpi_type_name', $this->kpi_type_name]);

        return $dataProvider;
    }
}
