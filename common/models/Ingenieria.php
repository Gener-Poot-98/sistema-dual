<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ingenieria".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property PerfilEstudiante[] $perfilEstudiantes
 * @property PlanEstudios[] $planEstudios
 * @property Preregistro[] $preregistros
 */
class Ingenieria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingenieria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 45],
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
        ];
    }

    /**
     * Gets query for [[PerfilEstudiantes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerfilEstudiantes()
    {
        return $this->hasMany(PerfilEstudiante::className(), ['ingenieria_id' => 'id']);
    }

    /**
     * Gets query for [[PlanEstudios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanEstudios()
    {
        return $this->hasMany(PlanEstudios::className(), ['ingenieria_id' => 'id']);
    }

    /**
     * Gets query for [[Preregistros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreregistros()
    {
        return $this->hasMany(Preregistro::className(), ['ingenieria_id' => 'id']);
    }
}
