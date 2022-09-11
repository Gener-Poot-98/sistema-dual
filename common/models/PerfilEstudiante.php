<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "perfil_estudiante".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $nombre
 * @property string|null $matricula
 * @property int|null $ingenieria_id
 * @property int|null $genero_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $especialidad_id
 *
 * @property Especialidad $especialidad
 * @property Genero $genero
 * @property Ingenieria $ingenieria
 * @property Proyecto[] $proyectos
 */
class PerfilEstudiante extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil_estudiante';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'ingenieria_id', 'genero_id', 'especialidad_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nombre', 'matricula'], 'string', 'max' => 45],
            [['especialidad_id'], 'exist', 'skipOnError' => true, 'targetClass' => Especialidad::className(), 'targetAttribute' => ['especialidad_id' => 'id']],
            [['genero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['genero_id' => 'id']],
            [['ingenieria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ingenieria::className(), 'targetAttribute' => ['ingenieria_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'nombre' => 'Nombre',
            'matricula' => 'Matricula',
            'ingenieria_id' => 'Ingenieria ID',
            'genero_id' => 'Genero ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'especialidad_id' => 'Especialidad ID',
        ];
    }

    /**
     * Gets query for [[Especialidad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecialidad()
    {
        return $this->hasOne(Especialidad::className(), ['id' => 'especialidad_id']);
    }

    /**
     * Gets query for [[Genero]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenero()
    {
        return $this->hasOne(Genero::className(), ['id' => 'genero_id']);
    }

    /**
     * Gets query for [[Ingenieria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngenieria()
    {
        return $this->hasOne(Ingenieria::className(), ['id' => 'ingenieria_id']);
    }

    /**
     * Gets query for [[Proyectos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyecto::className(), ['perfil_estudiante_id' => 'id']);
    }
}
