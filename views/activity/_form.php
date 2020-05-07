<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_id')->textInput() ?>

    <?= $form->field($model, 'activity_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activity_start_date')->textInput() ?>

    <?= $form->field($model, 'activity_end_date')->textInput() ?>

    <?= $form->field($model, 'activity_status')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'activity_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'd_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
