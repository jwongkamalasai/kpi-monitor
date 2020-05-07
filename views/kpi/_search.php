<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KpiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kpi_id') ?>

    <?= $form->field($model, 'kpi_name') ?>

    <?= $form->field($model, 'kpi_template') ?>

    <?= $form->field($model, 'kpi_taget') ?>

    <?= $form->field($model, 'kpi_result') ?>

    <?php // echo $form->field($model, 'kpi_flag') ?>

    <?php // echo $form->field($model, 'kpi_start_date') ?>

    <?php // echo $form->field($model, 'kpi_end_date') ?>

    <?php // echo $form->field($model, 'kpi_process_date') ?>

    <?php // echo $form->field($model, 'kpi_color') ?>

    <?php // echo $form->field($model, 'd_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
