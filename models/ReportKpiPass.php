<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_kpi_pass".
 *
 * @property int $kpi_type_id
 * @property string|null $kpi_type_name
 * @property int $pass
 * @property int $not_pass
 */
class ReportKpiPass extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_kpi_pass';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_type_id', 'pass', 'not_pass','kpi_yearbudget','total'], 'integer'],
            [['kpi_type_name'], 'string', 'max' => 255],
        ];
    }

    public static function primaryKey()
    {
        return ['kpi_type_id'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kpi_type_id' => 'Kpi Type ID',
            'kpi_yearbudget' => 'ปีงบประมาณ',
            'kpi_type_name' => 'ประเภทตัวชี้วัด',
            'total' => 'จำนวนตัวชี้วัด',
            'pass' => 'ผ่าน',
            'not_pass' => 'ไม่ผ่าน',
        ];
    }
}
