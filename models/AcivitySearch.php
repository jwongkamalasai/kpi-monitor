<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Activity;

/**
 * AcivitySearch represents the model behind the search form of `app\models\Activity`.
 */
class AcivitySearch extends Activity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id', 'kpi_id'], 'integer'],
            [['activity_name', 'activity_detail', 'activity_start_date', 'activity_end_date', 'activity_status', 'activity_color', 'd_update'], 'safe'],
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
        $query = Activity::find();

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
            'activity_id' => $this->activity_id,
            'kpi_id' => $this->kpi_id,
            'activity_start_date' => $this->activity_start_date,
            'activity_end_date' => $this->activity_end_date,
            'd_update' => $this->d_update,
        ]);

        $query->andFilterWhere(['like', 'activity_name', $this->activity_name])
            ->andFilterWhere(['like', 'activity_detail', $this->activity_detail])
            ->andFilterWhere(['like', 'activity_status', $this->activity_status])
            ->andFilterWhere(['like', 'activity_color', $this->activity_color]);

        return $dataProvider;
    }
}
