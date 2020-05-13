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
 * @property string|null $kpi_aim
 * @property int|null $kpi_rate
 * @property string|null $kpi_file
 * @property string|null $kpi_file_path
 */
class Kpi extends \yii\db\ActiveRecord
{
    public $uploadImageFolder = 'uploads'; //ที่เก็บรูปภาพ

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
            [['kpi_type_id', 'kpi_rate'], 'integer'],
            [['kpi_template', 'kpi_flag', 'kpi_aim'], 'string'],
            [['kpi_taget', 'kpi_result'], 'number'],
            [['kpi_start_date', 'kpi_end_date', 'kpi_process_date', 'd_update'], 'safe'],
            [['kpi_name', 'kpi_owner', 'kpi_color', 'kpi_file_path'], 'string', 'max' => 255],
            [['kpi_file',],'file' ,'extensions' => 'jpg, png, pdf'],
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
            'kpi_owner' => 'ผู้รับผิดชอบตัวชี้วัด',
            'kpi_color' => 'สีตัวชี้วัด',
            'd_update' => 'วันปรับปรุงข้อมูล',
            'kpi_aim' => 'ชนิดของผลลัพธ์',
            'kpi_rate' => 'การคิดคะแนน',
            'kpi_file' => 'ไฟล์',
            'kpi_file_path' => 'ที่อยู่ไฟล์',
        ];
    }

    public function getActivity(){
        return $this->hasMany(Activity::className(), ['kpi_id' => 'kpi_id']);
    }

    public function getType(){
        return $this->hasOne(Type::className(), ['kpi_type_id' => 'kpi_type_id']);
    }

    /*
    * UploadImage เป็น Method ในการ upload รูปภาพในที่นี้จะ upload ได้เพียงไฟล์เดียว โดยจะ return ชื่อไฟล์
    */
    public function uploadImage(){

        if($this->validate()){
            if($this->kpi_file){
                if($this->isNewRecord){//ถ้าเป็นการเพิ่มใหม่ ให้ตั้งชื่อไฟล์ใหม่
                    $fileName = substr(md5(rand(1,1000).time()),0,15).'.'.$this->kpi_file->extension;//เลือกมา 15 อักษร .นามสกุล
                }else{//ถ้าเป็นการ update ให้ใช้ชื่อเดิม
                    $fileName = $this->getOldAttribute('kpi_file');
                }
                $this->kpi_file->saveAs(Yii::getAlias('@webroot').'/'.$this->uploadImageFolder.'/'.$fileName);

                return $fileName;
            }//end image upload
        }//end validate
        return $this->isNewRecord ? false : $this->getOldAttribute('kpi_file'); //ถ้าไม่มีการ upload ให้ใช้ข้อมูลเดิม
    }

    /*
    * getImage เป็น method สำหรับเรียกที่เก็บไฟล์ เพื่อนำไปแสดงผล
    */
    public function getImage()
    {
        return Yii::getAlias('@web').'/'.$this->uploadImageFolder.'/'.$this->kpi_file;
    }
}
