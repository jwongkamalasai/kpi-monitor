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
            'kpi_id' => 'Kpi ID',
            'kpi_name' => 'Kpi Name',
            'kpi_template' => 'Kpi Template',
            'kpi_taget' => 'Kpi Taget',
            'kpi_result' => 'Kpi Result',
            'kpi_flag' => 'Kpi Flag',
            'kpi_start_date' => 'Kpi Start Date',
            'kpi_end_date' => 'Kpi End Date',
            'kpi_process_date' => 'Kpi Process Date',
            'kpi_color' => 'Kpi Color',
            'd_update' => 'D Update',
        ];
    }
}
