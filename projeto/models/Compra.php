<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property int $id
 * @property int $quantidade
 * @property string $data
 * @property string $valor
 * @property string $descricao
 * @property int $usuario_id
 *
 * @property Usuario $usuario
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantidade', 'data', 'valor', 'descricao'], 'required'],
            [['quantidade', 'usuario_id'], 'integer'],
            [['data' ], 'safe'],
            [['valor'], 'number'],
            [['descricao'], 'string', 'max' => 200],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantidade' => 'Quantidade',
            'data' => 'Data',
            'valor' => 'Valor',
            'descricao' => 'Descricao',
            'usuario_id' => 'Usuário',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
