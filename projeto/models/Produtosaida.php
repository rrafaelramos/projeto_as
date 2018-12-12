<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtosaida".
 *
 * @property int $produto_id
 * @property int $notafiscal_id
 * @property string $qnt
 * @property string $preco_venda
 *
 * @property Produto $produto
 * @property Notafiscalsaida $notafiscal
 */
class Produtosaida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtosaida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['produto_id', 'notafiscal_id', 'qnt', 'preco_venda'], 'required'],
            [['produto_id', 'notafiscal_id'], 'integer'],
            [['qnt', 'preco_venda'], 'number'],
            [['produto_id', 'notafiscal_id'], 'unique', 'targetAttribute' => ['produto_id', 'notafiscal_id']],
            [['produto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['produto_id' => 'id']],
            [['notafiscal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Notafiscalsaida::className(), 'targetAttribute' => ['notafiscal_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'produto_id' => 'Produto ID',
            'notafiscal_id' => 'Notafiscal ID',
            'qnt' => 'Qnt',
            'preco_venda' => 'Preco Venda',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::className(), ['id' => 'produto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotafiscal()
    {
        return $this->hasOne(Notafiscalsaida::className(), ['id' => 'notafiscal_id']);
    }
}
