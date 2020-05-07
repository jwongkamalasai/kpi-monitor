<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_id')->textInput() ?>

    <?= $form->field($model, 'kpi_date_report')->textInput() ?>

    <?= $form->field($model, 'kpi_result')->textInput() ?>

    <?= $form->field($model, 'kpi_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'd_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
