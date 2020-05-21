<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use app\models\Type;
use kartik\file\FileInput;
$yearbudget = ['2563'=>'2563','2564'=>'2564','2565'=>'2565'];
$type = ArrayHelper::map(Type::find()->all(), 'kpi_type_id', 'kpi_type_name');

/* @var $this yii\web\View */
/* @var $model app\models\Kpi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_type_id')->dropDownList($type, ['prompt'=>'เลือกประเภทตัวชี้วัด']) ?>

    <?= $form->field($model, 'kpi_yearbudget')->dropDownList($yearbudget, ['prompt'=>'ปีงบประมาณ']) ?>

    <?= $form->field($model, 'kpi_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kpi_template')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kpi_file')->widget(FileInput::classname(), [
        'options' => ['accept' => ['image/*','pdf']],
    ]);?>

    <?= $form->field($model, 'kpi_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kpi_taget')->textInput() ?>

    <?= $form->field($model, 'kpi_result')->textInput() ?>

    <?= $form->field($model, 'kpi_aim')->radioList([ 1 => 'มากดี', 0 => 'น้อยดี', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kpi_rate')->textInput() ?>

    <?= $form->field($model, 'kpi_start_date')->widget(DatePicker::ClassName(),
    [
        'name' => 'kpi_start_date', 
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'วันเริ่มนับ KPI'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]); ?>

    <?= $form->field($model, 'kpi_end_date')->widget(DatePicker::ClassName(),
    [
        'name' => 'kpi_end_date', 
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'วันสิ้นสุด KPI'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]); ?>
    
    <?= $form->field($model, 'kpi_process_date')->widget(DatePicker::ClassName(),
    [
        'name' => 'kpi_process_date', 
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'วันประมวลผล KPI'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]); ?>

    <?= $form->field($model, 'kpi_flag')->radioList([ 1 => 'ผ่าน', 0 => 'ไม่ผ่าน', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kpi_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
