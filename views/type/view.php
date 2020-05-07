<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType */

$this->title = $model->kpi_type_id;
$this->params['breadcrumbs'][] = ['label' => 'ประเภทตัวชี้วัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kpi-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->kpi_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->kpi_type_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ต้องการลบรายการ '.$model->kpi_type_name.' ใช่หรือไม่ ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kpi_type_id',
            'kpi_type_name',
        ],
    ]) ?>

</div>
