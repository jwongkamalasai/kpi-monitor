<?php
use app\models\Kpi;
use app\models\Activity;

$kpi = Kpi::find()->select('kpi_id as id,kpi_name as title')->asArray()->all();
$events = Activity::find()->select('activity_id as id,kpi_id as resourceId,activity_start_date as start,activity_end_date as end,activity_name as title,activity_color as color')->asArray()->all();
/* @var $this yii\web\View */

$this->title = 'KPI Monitoring';
?>
<div class="site-index">
<?= \edofre\fullcalendarscheduler\FullcalendarScheduler::widget([
	'header'        => [
//		'left'   => 'today prev,next',
		'right'   => 'next',
        'center' => 'title',
//		'right'  => 'timelineDay,timelineThreeDays,agendaWeek,month',
		'left'  => 'prev month,timelineHalf,timelineYear',
],
	'clientOptions' => [
        'schedulerLicenseKey' => 'GPL-My-Project-Is-Open-Source',
		'now'               => date('Y-m-d'),
		'editable'          => false, // enable draggable events
		'aspectRatio'       => 1.8,
        'scrollTime'        => '08:00', // undo default 6am scrollTime
        'timeFormat'        => 'HH:mm',
        'slotDuration'      => [ 'month' => 1 ],
		'defaultView'       => 'timelineYear',
		'views'             => [
			'timelineHalf' => [
				'type'     => 'timeline',
				'duration' => [
					'month' => 6,
				],
			],
		],
		'resourceLabelText' => 'ตัวชี้วัด',
		'resources'         => $kpi,
        'events'            => $events,
	],
]);
?>
</div>
