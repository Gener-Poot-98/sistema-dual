<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Preregistro */

$this->title = 'Pre-Registro';
//$this->params['breadcrumbs'][] = ['label' => 'Preregistros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preregistro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
