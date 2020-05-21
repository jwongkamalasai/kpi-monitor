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
