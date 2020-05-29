<?php

//use app\models\Report;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\ReportKpiPass;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use miloschuman\highcharts\Highcharts;

$data = ReportKpiPass::find()->select('kpi_type_name,total')->asArray()->all();
$result = ArrayHelper::map($data, 'kpi_type_name', 'total');
foreach($data as $i){
$r = array();
$r += [$i['kpi_type_name'],$i['total']];
}    
//$data = [['kpi',12],['ranking',23],['qof',9]];

echo Highcharts::widget([
    'options' => [
        'title' => ['text' => 'Sample title - pie chart'],
        'plotOptions' => [
            'pie' => [
                'cursor' => 'pointer',
            ],
        ],
        'series' => [
            [ // new opening bracket
                'type' => 'pie',
                'name' => 'Elements',
                'data' => $r,
            ] // new closing bracket
        ],
    ],
]);

$this->title = 'ตัวชี้วัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'kpi_yearbudget',
            'kpi_type_name',
            'total',
            'pass',
            'not_pass',
        ],
    ]); ?>


</div>
