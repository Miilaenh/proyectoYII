<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensor_logs".
 *
 * @property int $id
 * @property int $id_sensor
 * @property string $evento
 * @property string $fecha_del_evento
 *
 * @property Sensor $sensor
 */
class SensorLogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sensor_logs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sensor', 'evento'], 'required'],
            [['id_sensor'], 'integer'],
            [['evento'], 'string'],
            [['fecha_del_evento'], 'safe'],
            [['id_sensor'], 'exist', 'skipOnError' => true, 'targetClass' => Sensor::class, 'targetAttribute' => ['id_sensor' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_sensor' => 'Id Sensor',
            'evento' => 'Evento',
            'fecha_del_evento' => 'Fecha Del Evento',
        ];
    }

    /**
     * Gets query for [[Sensor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSensor()
    {
        return $this->hasOne(Sensor::class, ['id' => 'id_sensor']);
    }
}
