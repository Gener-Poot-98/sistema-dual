<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Preregistro */

$this->title = $model->nombre;
//$this->params['breadcrumbs'][] = ['label' => 'Preregistros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="preregistro-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nombre',
            'matricula',
            'email:email',
            [ 'label' => 'Ingenieria', 'value' => function ($searchModel) 
            { 
                return $searchModel->ingenieria->nombre; 
            } ],
            //'kardex',
            [
                'attribute' => 'kardex',
                'format' => 'html',
                'value' => function($model)
                {
                    return Html::a(basename($model->kardex), ['download', 'filename' => $model -> kardex]);
                }
            ],
            //'constancia_ingles',
            [
                'attribute' => 'constancia_ingles',
                'format' => 'html',
                'value' => function($model)
                {
                    return Html::a(basename($model->constancia_ingles), ['download', 'filename' => $model -> constancia_ingles]);
                }
            ],
            //'constancia_servicio_social',
            [
                'attribute' => 'constancia_servicio_social',
                'format' => 'html',
                'value' => function($model)
                {
                    return Html::a(basename($model->constancia_servicio_social), ['download', 'filename' => $model -> constancia_servicio_social]);
                }
            ],
            //'constancia_creditos_complementarios',
            [
                'attribute' => 'constancia_creditos_complementarios',
                'format' => 'html',
                'value' => function($model)
                {
                    return Html::a(basename($model->constancia_creditos_complementarios), ['download', 'filename' => $model -> constancia_creditos_complementarios]);
                }
            ],
            'created_at',
            //'estado_registro_id',
            [ 'label' => 'Estado', 'value' => function ($searchModel) 
            { 
                return $searchModel->estadoRegistro->nombre; 
            } ],
        ],
    ]) ?>

</div>
