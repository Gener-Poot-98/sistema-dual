<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Preregistro */
/* @var $form yii\widgets\ActiveForm */

$this->registerCss("
    
    .preregistro-form{
        width: 90%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column wrap;
        border-radius: 5px;
        
    }
    label, .preregistro-form {
        font-size:20px;
        
    }

    .help-block{
        color: #fd5c70;
    }    
    
    .form-control {
        font-size:20px;
    }
    
    ");

?>
<div class="preregistro-form">

    <?php $form = ActiveForm::begin(); ?>
    

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ingenieria_id')->dropDownList($model->getIngenieriasList(), ['prompt' => 'Seleccione su Ingeniería']) ?>

    <?= $form->field($model, 'archivoKardex')->fileInput() ?>

    <?= $form->field($model, 'archivoConstancia_ingles')->fileInput() ?>

    <?= $form->field($model, 'archivoConstancia_servicio_social')->fileInput() ?>

    <?= $form->field($model, 'archivoConstancia_creditos_complementarios')->fileInput() ?>

    <div class="col text-center">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-info btn-lg btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>