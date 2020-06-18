<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ตัวชี้วัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มตัวชี้วัด', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kpi_id',
            'type.kpi_type_name',
            'kpi_name',
            'kpi_template:ntext',
            'kpi_taget',
            'kpi_result',
            'kpi_rate',
            'kpi_owner',
            //'kpi_flag',
            //'kpi_start_date',
            //'kpi_end_date',
            //'kpi_process_date',
            //'kpi_color',
            //'d_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
