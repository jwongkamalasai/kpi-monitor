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
            'kpi_id' => 'KPI ID',
            'kpi_date_report' => 'วันที่รายงานตัวชี้วัด',
            'kpi_result' => 'ผลงานตัวชี้วัด',
            'kpi_comment' => 'หมายเหตุ',
            'd_update' => 'วันที่ปรับปรุงข้อมูล',
        ];
    }

    public function getKpi(){
        return $this->hasOne(Kpi::className(), ['kpi_id' => 'kpi_id']);
    }
   
}
