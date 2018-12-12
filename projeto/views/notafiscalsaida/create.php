<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Notafiscalsaida */

$this->title = 'Create Notafiscalsaida';
$this->params['breadcrumbs'][] = ['label' => 'Notafiscalsaidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notafiscalsaida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
