<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SensorLogs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sensor-logs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sensor')->textInput() ?>

    <?= $form->field($model, 'evento')->dropDownList([ 'apagado' => 'Apagado', 'encendido' => 'Encendido', 'movimiento' => 'Movimiento', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fecha_del_evento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
