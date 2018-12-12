<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NotafiscalsaidaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notafiscalsaida-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'num') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'cliente_id') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <?php // echo $form->field($model, 'datapagamento') ?>

    <?php // echo $form->field($model, 'formapagamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
