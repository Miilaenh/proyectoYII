<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsuarioSensor $model */

$this->title = 'Create Usuario Sensor';
$this->params['breadcrumbs'][] = ['label' => 'Usuario Sensors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-sensor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
