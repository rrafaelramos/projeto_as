<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NotafiscalsaidaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notafiscalsaidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notafiscalsaida-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notafiscalsaida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'num',
            'data',
            'valor',
            'cliente_id',
            //'usuario_id',
            //'datapagamento',
            //'formapagamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
