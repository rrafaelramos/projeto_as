<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notafiscalsaida;

/**
 * NotafiscalsaidaSearch represents the model behind the search form of `app\models\Notafiscalsaida`.
 */
class NotafiscalsaidaSearch extends Notafiscalsaida
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'num', 'cliente_id', 'usuario_id', 'formapagamento'], 'integer'],
            [['data', 'datapagamento'], 'safe'],
            [['valor'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Notafiscalsaida::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'num' => $this->num,
            'data' => $this->data,
            'valor' => $this->valor,
            'cliente_id' => $this->cliente_id,
            'usuario_id' => $this->usuario_id,
            'datapagamento' => $this->datapagamento,
            'formapagamento' => $this->formapagamento,
        ]);

        return $dataProvider;
    }
}
