<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $cpf
 * @property string $nome
 * @property string $rua
 * @property string $bairro
 * @property string $cidade
 * @property int $numero
 * @property string $datanascimento
 *
 * @property Notafiscalsaida[] $notafiscalsaidas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpf', 'nome'], 'required'],
            [['numero'], 'integer'],
            [['datanascimento'], 'safe'],
            [['cpf'], 'string', 'max' => 14],
            [['nome', 'rua', 'bairro', 'cidade'], 'string', 'max' => 200],
            [['cpf'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cpf' => 'CPF',
            'nome' => 'Nome',
            'rua' => 'Rua',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'numero' => 'Número',
            'datanascimento' => 'Data de Nascimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotafiscalsaidas()
    {
        return $this->hasMany(Notafiscalsaida::className(), ['cliente_id' => 'id']);
    }
}
