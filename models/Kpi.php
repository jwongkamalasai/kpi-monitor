<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kpi".
 *
 * @property int $kpi_id
 * @property string|null $kpi_name
 * @property string|null $kpi_template
 * @property float|null $kpi_taget
 * @property float|null $kpi_result
 * @property string|null $kpi_flag
 * @property string|null $kpi_start_date
 * @property string|null $kpi_end_date
 * @property string|null $kpi_process_date
 * @property string|null $kpi_color
 * @property string|null $d_update
 */
class Kpi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kpi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_template', 'kpi_flag'], 'string'],
            [['kpi_taget', 'kpi_result'], 'number'],
            [['kpi_type_id'],'integer'],
            [['kpi_start_date', 'kpi_end_date', 'kpi_process_date', 'd_update'], 'safe'],
            [['kpi_name', 'kpi_color'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kpi_id' => 'ID',
            'kpi_name' => 'ตัวชี้วัด',
            'kpi_type_id' => 'ประเภทตัวชี้วัด',
            'kpi_template' => 'Template',
            'kpi_taget' => 'เป้าหมาย',
            'kpi_result' => 'ผลงาน',
            'kpi_flag' => 'สถานะ',
            'kpi_start_date' => 'วันที่เริ่มต้น',
            'kpi_end_date' => 'วันสุดท้าย',
            'kpi_process_date' => 'วันประมวลผล',
            'kpi_color' => 'สีตัวชี้วัด',
            'd_update' => 'วันปรับปรุงข้อมูล',
        ];
    }

    public function getActivity(){
        return $this->hasMany(Activity::className(), ['kpi_id' => 'kpi_id']);
    }

    public function getType(){
        return $this->hasOne(Type::className(), ['kpi_type_id' => 'kpi_type_id']);
    }

}
