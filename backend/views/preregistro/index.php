<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Preregistro;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PreregistroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preregistros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preregistro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'matricula',
            'email:email',
            [ 'label' => 'Ingenieria','attribute' => 'ingenieriaNombre', 'filter' => $searchModel->getIngenieriasList() ],
            //'kardex',
            //'constancia_ingles',
            //'constancia_servicio_social',
            //'constancia_creditos_complementarios',
            //'created_at',
            //'estado_registro_id',
            [ 'label' => 'Estado','attribute' => 'estadoRegistroNombre', 'filter' => $searchModel->getEstadoRegistroNombreList() ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Preregistro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
