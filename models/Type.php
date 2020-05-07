<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property int $kpi_type_id
 * @property string|null $kpi_type_name
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kpi_type_id' => 'ID',
            'kpi_type_name' => 'ประเภทตัวชี้วัด',
        ];
    }
}
