<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use app\models\Kpi;

$kpi = ArrayHelper::map(Kpi::find()->all(), 'kpi_id', 'kpi_name');


/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_id')->dropDownList($kpi, ['prompt'=>'เลือกตัวชี้วัด']) ?>

    <?= $form->field($model, 'activity_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activity_start_date')->widget(DatePicker::ClassName(),
    [
        'name' => 'activity_start_date', 
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'วันเริ่มกิจกรรม'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]); ?>

    <?= $form->field($model, 'activity_end_date')->widget(DatePicker::ClassName(),
    [
        'name' => 'activity_end_date', 
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'วันสิ้นสุดกิจกรรม'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]); ?>

    <?= $form->field($model, 'activity_status')->radioList([ 1 => 'ดำเนินการ', 0 => 'ยังไม่ดำเนินการ', 9 => 'ดำเนินการเสร็จสิ้น' ], ['prompt' => '']) ?>

    <?= $form->field($model, 'activity_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
