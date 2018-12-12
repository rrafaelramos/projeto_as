<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $cpf
 * @property string $nome
 * @property string $rua
 * @property string $bairro
 * @property string $cidade
 * @property int $numero
 * @property string $datanascimento
 *
 * @property Compra[] $compras
 * @property Notafiscalsaida[] $notafiscalsaidas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'cpf', 'nome'], 'required'],
            [['numero'], 'integer'],
            [['datanascimento'], 'safe'],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 50],
            [['cpf'], 'string', 'max' => 14],
            [['nome', 'rua', 'bairro', 'cidade'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'cpf' => 'Cpf',
            'nome' => 'Nome',
            'rua' => 'Rua',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'numero' => 'Numero',
            'datanascimento' => 'Datanascimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotafiscalsaidas()
    {
        return $this->hasMany(Notafiscalsaida::className(), ['usuario_id' => 'id']);
    }
}
