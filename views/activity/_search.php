<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'activity_id') ?>

    <?= $form->field($model, 'kpi_id') ?>

    <?= $form->field($model, 'activity_name') ?>

    <?= $form->field($model, 'activity_detail') ?>

    <?= $form->field($model, 'activity_start_date') ?>

    <?php // echo $form->field($model, 'activity_end_date') ?>

    <?php // echo $form->field($model, 'activity_status') ?>

    <?php // echo $form->field($model, 'activity_color') ?>

    <?php // echo $form->field($model, 'd_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
