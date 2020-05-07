<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $id
 * @property int|null $kpi_id
 * @property string|null $kpi_date_report
 * @property float|null $kpi_result
 * @property string|null $kpi_comment
 * @property string|null $d_update
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_id'], 'integer'],
            [['kpi_date_report', 'd_update'], 'safe'],
            [['kpi_result'], 'number'],
            [['kpi_comment'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kpi_id' => 'Kpi ID',
            'kpi_date_report' => 'Kpi Date Report',
            'kpi_result' => 'Kpi Result',
            'kpi_comment' => 'Kpi Comment',
            'd_update' => 'D Update',
        ];
    }
}
