<?php

/*
 * Team：少萝刚满十八岁爱吃辣椒炒肉和金钱蛋
 * Coding By：王荣熙
*/

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Rwardamage;

/**
 * rwardamageSearch represents the model behind the search form of `frontend\models\Rwardamage`.
 */
class rwardamageSearch extends Rwardamage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place', 'time', 'weapon'], 'safe'],
            [['amount'], 'integer'],
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
        $query = Rwardamage::find();

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
            'time' => $this->time,
            'amount' => $this->amount,
        ]);

        $query->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'weapon', $this->weapon]);

        return $dataProvider;
    }
}
