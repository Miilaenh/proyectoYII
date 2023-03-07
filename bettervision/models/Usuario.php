<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $user
 * @property string $pass
 * @property string $nombre
 * @property string $ap
 * @property string $am
 * @property int $id_perfil
 * @property string $correo
 * @property bool|null $activo
 *
 * @property Perfil $perfil
 * @property UsuarioSensor[] $usuarioSensors
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'pass', 'nombre', 'ap', 'am', 'id_perfil', 'correo'], 'required'],
            [['id_perfil'], 'integer'],
            [['activo'], 'boolean'],
            [['user', 'nombre', 'ap', 'am'], 'string', 'max' => 50],
            [['pass'], 'string', 'max' => 255],
            [['correo'], 'string', 'max' => 64],
            [['correo'], 'unique'],
            [['id_perfil'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::class, 'targetAttribute' => ['id_perfil' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'pass' => 'Pass',
            'nombre' => 'Nombre',
            'ap' => 'Ap',
            'am' => 'Am',
            'id_perfil' => 'Id Perfil',
            'correo' => 'Correo',
            'activo' => 'Activo',
        ];
    }

    /**
     * Gets query for [[Perfil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerfil()
    {
        return $this->hasOne(Perfil::class, ['id' => 'id_perfil']);
    }

    /**
     * Gets query for [[UsuarioSensors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioSensors()
    {
        return $this->hasMany(UsuarioSensor::class, ['id_usuario' => 'id']);
    }
}
