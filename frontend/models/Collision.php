<?php

namespace frontend\models;

/*
 * Team：少萝刚满十八岁爱吃辣椒炒肉和金钱蛋
 * Coding By：王荣熙
*/

use Yii;

/**
 * This is the model class for table "collision".
 *
 * @property string $place
 * @property string $time
 * @property int|null $rforce
 * @property int|null $uforce
 * @property int|null $rinjury
 * @property int|null $uinjury
 */
class Collision extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'collision';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place', 'time'], 'required'],
            [['time'], 'safe'],
            [['rforce', 'uforce', 'rinjury', 'uinjury'], 'integer'],
            [['place'], 'string', 'max' => 255],
            [['place', 'time'], 'unique', 'targetAttribute' => ['place', 'time']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'place' => 'Place',
            'time' => 'Time',
            'rforce' => 'Rforce',
            'uforce' => 'Uforce',
            'rinjury' => 'Rinjury',
            'uinjury' => 'Uinjury',
        ];
    }
}
