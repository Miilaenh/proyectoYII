<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_sensor".
 *
 * @property int $id
 * @property int $id_sensor
 * @property int $id_usuario
 *
 * @property Sensor $sensor
 * @property Usuario $usuario
 */
class UsuarioSensor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario_sensor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_sensor', 'id_usuario'], 'required'],
            [['id', 'id_sensor', 'id_usuario'], 'integer'],
            [['id'], 'unique'],
            [['id_sensor'], 'exist', 'skipOnError' => true, 'targetClass' => Sensor::class, 'targetAttribute' => ['id_sensor' => 'id']],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['id_usuario' => 'id']],
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
            'id_usuario' => 'Id Usuario',
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

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'id_usuario']);
    }
}
