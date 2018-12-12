<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Categoria;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_id')->dropdownList(ArrayHelper::map(Categoria::find()->orderBy('nome')->all(),'id','nome'),
            ['prompt' => 'Selecione']); ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
