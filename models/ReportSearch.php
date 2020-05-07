<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Report;

/**
 * ReportSearch represents the model behind the search form of `app\models\Report`.
 */
class ReportSearch extends Report
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kpi_id'], 'integer'],
            [['kpi_date_report', 'kpi_comment', 'd_update'], 'safe'],
            [['kpi_result'], 'number'],
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
        $query = Report::find();

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
            'kpi_id' => $this->kpi_id,
            'kpi_date_report' => $this->kpi_date_report,
            'kpi_result' => $this->kpi_result,
            'd_update' => $this->d_update,
        ]);

        $query->andFilterWhere(['like', 'kpi_comment', $this->kpi_comment]);

        return $dataProvider;
    }
}
