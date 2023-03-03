<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SensorLogs $model */

$this->title = 'Update Sensor Logs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sensor Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sensor-logs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
