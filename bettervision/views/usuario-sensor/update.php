<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsuarioSensor $model */

$this->title = 'Update Usuario Sensor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Sensors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-sensor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
