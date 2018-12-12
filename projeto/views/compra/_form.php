<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuario;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Compra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quantidade')->textInput() ?>

    <?=     
    $form->field($model, 'data')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
   
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
]); ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->dropDownList(ArrayHelper::map(Usuario::find()->orderBy('nome')->all(),'id','nome'),
            ['prompt' => 'Selecione']) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
