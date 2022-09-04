<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Ingenieria;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\IngenieriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ingenierias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingenieria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ingenieria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ingenieria $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
