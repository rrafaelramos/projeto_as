<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string $descricao
 * @property string $preco
 * @property int $categoria_id
 *
 * @property Categoria $categoria
 * @property Produtosaida[] $produtosaidas
 * @property Notafiscalsaida[] $notafiscals
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['preco'], 'number'],
            [['categoria_id'], 'integer'],
            [['descricao'], 'string', 'max' => 100],
            [['categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descrição',
            'preco' => 'Preço',
            'categoria_id' => 'Categoria ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'categoria_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosaidas()
    {
        return $this->hasMany(Produtosaida::className(), ['produto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotafiscals()
    {
        return $this->hasMany(Notafiscalsaida::className(), ['id' => 'notafiscal_id'])->viaTable('produtosaida', ['produto_id' => 'id']);
    }
}
