<?php

/**
 * 互联网团队
 * 李新
*/

namespace common\models;


use yii\db\ActiveRecord;


class Refugee extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%Refugee}}';
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getNum()
    {
        return $this->num;
    }
}