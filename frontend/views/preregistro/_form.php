<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Preregistro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preregistro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ingenieria_id')->dropDownList($model->getIngenieriasList(), ['prompt'=>'Seleccione su Ingeniería']) ?>

    <?= $form->field($model, 'kardex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'constancia_ingles')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'constancia_servicio_social')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'constancia_creditos_complementarios')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
