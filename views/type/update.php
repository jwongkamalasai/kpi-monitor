<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType */

$this->title = 'แก้ไขประเภทตัวชี้วัด: ' . $model->kpi_type_id;
$this->params['breadcrumbs'][] = ['label' => 'ประเภทตัวชี้วัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_type_id, 'url' => ['view', 'id' => $model->kpi_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
