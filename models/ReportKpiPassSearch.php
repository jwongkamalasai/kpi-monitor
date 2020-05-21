<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportKpiPass;

/**
 * ReportKpiPassSearch represents the model behind the search form of `app\models\ReportKpiPass`.
 */
class ReportKpiPassSearch extends ReportKpiPass
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_type_id', 'pass', 'not_pass','kpi_yearbudget','total'], 'integer'],
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
        $query = ReportKpiPass::find();

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
            'kpi_yearbudget' => $this->kpi_yearbudget,
            'total' => $this->total,
            'pass' => $this->pass,
            'not_pass' => $this->not_pass,
        ]);

        $query->andFilterWhere(['like', 'kpi_type_name', $this->kpi_type_name]);

        return $dataProvider;
    }
}
