<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ingenieria */

$this->title = 'Create Ingenieria';
$this->params['breadcrumbs'][] = ['label' => 'Ingenierias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingenieria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
