<?php

/*
 * Team：少萝刚满十八岁爱吃辣椒炒肉和金钱蛋
 * Coding By：王荣熙
*/

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\collision;

/**
 * collisionSearch represents the model behind the search form of `frontend\views\collision`.
 */
class collisionSearch extends collision
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place', 'time'], 'safe'],
            [['rforce', 'uforce', 'rinjury', 'uinjury'], 'integer'],
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
        $query = collision::find();

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
            'rforce' => $this->rforce,
            'uforce' => $this->uforce,
            'rinjury' => $this->rinjury,
            'uinjury' => $this->uinjury,
        ]);

        $query->andFilterWhere(['like', 'place', $this->place]);

        return $dataProvider;
    }
}
