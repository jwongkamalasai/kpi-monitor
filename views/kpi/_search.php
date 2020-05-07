<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;

$type = ArrayHelper::map(Type::find()->all(), 'kpi_type_id', 'kpi_type_name');

/* @var $this yii\web\View */
/* @var $model app\models\KpiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'kpi_type_id')->dropDownList($type, ['prompt'=>'เลือกประเภทตัวชี้วัด']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'kpi_name') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'kpi_owner') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'kpi_flag')->radioList([ 1 => 'ผ่าน', 0 => 'ไม่ผ่าน', ], ['prompt' => '']) ?>
        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
