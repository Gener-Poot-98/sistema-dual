<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ProyectoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'departamento_id') ?>

    <?= $form->field($model, 'ingenieria_id') ?>

    <?= $form->field($model, 'perfil_estudiante_id') ?>

    <?php // echo $form->field($model, 'empresa_id') ?>

    <?php // echo $form->field($model, 'asesor_externo_id') ?>

    <?php // echo $form->field($model, 'estado_proyecto_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
