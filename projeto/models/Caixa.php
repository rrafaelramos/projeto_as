<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa".
 *
 * @property int $id
 * @property string $saldo
 */
class Caixa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caixa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['saldo'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'saldo' => 'Saldo',
        ];
    }
}
