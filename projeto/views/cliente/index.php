<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cliente Avulso';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Cliente', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    <br>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'cpf',
            'nome',
            'rua',
            'bairro',
            'cidade',
            'numero',
            ['attribute' => 'datanascimento',
                'format' => ['date', 'php:d/m/Y'],
            ],
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
