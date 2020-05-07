<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property int $activity_id
 * @property int|null $kpi_id
 * @property string|null $activity_name
 * @property string|null $activity_detail
 * @property string|null $activity_start_date
 * @property string|null $activity_end_date
 * @property string|null $activity_status
 * @property string|null $activity_color
 * @property string|null $d_update
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_id'], 'integer'],
            [['activity_detail', 'activity_status'], 'string'],
            [['activity_start_date', 'activity_end_date', 'd_update'], 'safe'],
            [['activity_name', 'activity_color'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_id' => 'ID',
            'kpi_id' => 'KPI ID',
            'activity_name' => 'กิจกรรม',
            'activity_detail' => 'รายละเอียดกิจกรรม',
            'activity_start_date' => 'วันที่เริ่มกิจกรรม',
            'activity_end_date' => 'วันสิ้นสุดกิจกรรม',
            'activity_status' => 'สถานะกิจกรรม',
            'activity_color' => 'สีกิจกรรม',
            'd_update' => 'วันปรับปรุงข้อมูล',
        ];
    }

    public function getKpi(){
        return $this->hasOne(Kpi::className(), ['kpi_id' => 'kpi_id']);
    }
}
