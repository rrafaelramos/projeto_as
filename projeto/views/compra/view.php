<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Usuario;

/* @var $this yii\web\View */
/* @var $model app\models\Compra */

$this->title = $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja realmente excluir este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'quantidade',
            ['attribute' => 'data',
                'format' => ['date', 'php:d/m/Y'],
            ],
            'valor',
            'descricao',
            [
                'label' => 'Usuário',
                'value' => $model->usuario->nome],
        ],
        
    ]) ?>

</div>
