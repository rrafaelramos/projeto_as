<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notafiscalsaida".
 *
 * @property int $id
 * @property int $num
 * @property string $data
 * @property string $valor
 * @property int $cliente_id
 * @property int $usuario_id
 * @property string $datapagamento
 * @property int $formapagamento
 *
 * @property Usuario $usuario
 * @property Cliente $cliente
 * @property Produtosaida[] $produtosaidas
 * @property Produto[] $produtos
 */
class Notafiscalsaida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notafiscalsaida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num', 'data', 'valor'], 'required'],
            [['num', 'cliente_id', 'usuario_id', 'formapagamento'], 'integer'],
            [['data', 'datapagamento'], 'safe'],
            [['valor'], 'number'],
            [['num'], 'unique'],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => 'Num',
            'data' => 'Data',
            'valor' => 'Valor',
            'cliente_id' => 'Cliente ID',
            'usuario_id' => 'Usuario ID',
            'datapagamento' => 'Datapagamento',
            'formapagamento' => 'Formapagamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'cliente_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosaidas()
    {
        return $this->hasMany(Produtosaida::className(), ['notafiscal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['id' => 'produto_id'])->viaTable('produtosaida', ['notafiscal_id' => 'id']);
    }
}
