<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Proyecto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="proyecto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            [ 'label' => 'Departamento', 'value' => function ($searchModel) 
            { 
                return $searchModel->departamento->nombre; 
            } ],
            //'departamento_id',
            [ 'label' => 'Ingenieria', 'value' => function ($searchModel) 
            { 
                return $searchModel->ingenieria->nombre; 
            } ],
            //'ingenieria_id',
            [ 'label' => 'PerfilEstudiante', 'value' => function ($searchModel) 
            { 
                return $searchModel->perfilEstudiante->nombre; 
            } ],
            //'perfil_estudiante_id',
            [ 'label' => 'Empresa', 'value' => function ($searchModel) 
            { 
                return $searchModel->empresa->nombre; 
            } ],
            //'empresa_id',
            [ 'label' => 'AsesorExterno', 'value' => function ($searchModel) 
            { 
                return $searchModel->asesorExterno->nombre; 
            } ],
            //'asesor_externo_id',
            [ 'label' => 'EstadoProyecto', 'value' => function ($searchModel) 
            { 
                return $searchModel->estadoProyecto->nombre; 
            } ],
           // 'estado_proyecto_id',
        ],
    ]) ?>

</div>
