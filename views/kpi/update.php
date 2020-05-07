<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kpi */

$this->title = 'แก้ไขตัวชี้วัด: ' . $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_id, 'url' => ['view', 'id' => $model->kpi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
