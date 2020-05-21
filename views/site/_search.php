<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Type;

$yearbudget = ['2563'=>'2563','2564'=>'2564','2565'=>'2565'];
$type = ArrayHelper::map(Type::find()->all(), 'kpi_type_id', 'kpi_type_name');

/* @var $this yii\web\View */
/* @var $model app\models\KpiTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['report'],
        'method' => 'get',
    ]); ?>

<?= $form->field($model, 'kpi_type_id')->dropDownList($type, ['prompt'=>'เลือกประเภทตัวชี้วัด']) ?>

<?= $form->field($model, 'kpi_yearbudget')->dropDownList($yearbudget, ['prompt'=>'ปีงบประมาณ']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
