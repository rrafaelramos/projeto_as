<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cliente;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\DateControl;


/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(),[
        'mask' => '999.999.999-99'
    ]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?=     
    $form->field($model, 'datanascimento')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
   
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
    ]); ?>
    
    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
