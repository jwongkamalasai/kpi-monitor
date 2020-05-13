<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kpi */

$this->title = $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kpi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->kpi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->kpi_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ต้องการลบรายการ '.$model->kpi_name.' ใช่หรือไม่ ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kpi_id',
            'type.kpi_type_name',
            'kpi_name',
            'kpi_template:ntext',
            [
                'attribute' => 'kpi_file',
                'format' => 'raw',
                'value' => $model->kpi_file ? Html::img($model->getImage(), ['class' => 'img-responsive']) : null
            ],
            [
                'attribute' => 'kpi_file',
                'label' => '',
                'format' => 'raw',
                'value' => $model->kpi_file ? Html::a('Download', [
                    'kpi/pdf',
                    'id' => $model->kpi_id,
                ], [
                    'class' => 'btn btn-primary',
                    'target' => '_blank',
                ]): null,
            ],
            'kpi_taget',
            'kpi_result',
            'kpi_aim',
            'kpi_rate',
            'kpi_flag',
            'kpi_start_date',
            'kpi_end_date',
            'kpi_process_date',
            'kpi_owner',
            'kpi_color',
            'd_update',
        ],
    ]) ?>

</div>
