<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Notafiscalsaida */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notafiscalsaida-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente_id')->textInput() ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'datapagamento')->textInput() ?>

    <?= $form->field($model, 'formapagamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
