<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensor".
 *
 * @property int $id
 * @property string $nombre
 * @property bool|null $estado
 *
 * @property SensorLogs[] $sensorLogs
 * @property UsuarioSensor[] $usuarioSensors
 */
class Sensor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sensor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['estado'], 'boolean'],
            [['nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[SensorLogs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSensorLogs()
    {
        return $this->hasMany(SensorLogs::class, ['id_sensor' => 'id']);
    }

    /**
     * Gets query for [[UsuarioSensors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioSensors()
    {
        return $this->hasMany(UsuarioSensor::class, ['id_sensor' => 'id']);
    }
}
