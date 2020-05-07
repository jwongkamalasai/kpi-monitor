<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use app\models\Kpi;

$kpi = ArrayHelper::map(Kpi::find()->all(), 'kpi_id', 'kpi_name');

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_id')->dropDownList($kpi, ['prompt'=>'เลือกตัวชี้วัด']) ?>

    <?= $form->field($model, 'kpi_date_report')->widget(DatePicker::ClassName(),
    [
        'name' => 'kpi_date_report', 
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'options' => ['placeholder' => 'วันรายงานตัวชี้วัด'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]); ?>

    <?= $form->field($model, 'kpi_result')->textInput() ?>

    <?= $form->field($model, 'kpi_comment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
