<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kpi;

/**
 * KpiSearch represents the model behind the search form of `app\models\Kpi`.
 */
class KpiSearch extends Kpi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_id', 'kpi_type_id', 'kpi_rate'], 'integer'],
            [['kpi_name', 'kpi_template', 'kpi_flag', 'kpi_start_date', 'kpi_end_date', 'kpi_process_date', 'kpi_owner', 'kpi_color', 'd_update', 'kpi_aim', 'kpi_file'], 'safe'],
            [['kpi_taget', 'kpi_result'], 'number'],
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
        $query = Kpi::find();

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
            'kpi_id' => $this->kpi_id,
            'kpi_type_id' => $this->kpi_type_id,
            'kpi_taget' => $this->kpi_taget,
            'kpi_result' => $this->kpi_result,
            'kpi_start_date' => $this->kpi_start_date,
            'kpi_end_date' => $this->kpi_end_date,
            'kpi_process_date' => $this->kpi_process_date,
            'd_update' => $this->d_update,
        ]);

        $query->andFilterWhere(['like', 'kpi_name', $this->kpi_name])
            ->andFilterWhere(['like', 'kpi_template', $this->kpi_template])
            ->andFilterWhere(['like', 'kpi_owner', $this->kpi_owner])
            ->andFilterWhere(['like', 'kpi_flag', $this->kpi_flag])
            ->andFilterWhere(['like', 'kpi_color', $this->kpi_color])
            ->andFilterWhere(['like', 'kpi_aim', $this->kpi_aim])
            ->andFilterWhere(['like', 'kpi_file', $this->kpi_file]);
        return $dataProvider;
    }
}
