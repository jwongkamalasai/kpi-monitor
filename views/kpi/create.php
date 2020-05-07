<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kpi */

$this->title = 'เพิ่มตัวชี้วัด';
$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
