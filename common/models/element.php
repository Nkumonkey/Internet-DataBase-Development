<?php

/**
 * 少萝刚满十八岁爱吃辣椒炒肉和金钱蛋
 * 李新
*/

namespace common\models;


use yii\db\ActiveRecord;

/**
 * 团队相关数据，用于在前台显示
 * @property string $name    元素名字
 * @property string $time   半衰期名字
 */
class element extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%element}}';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getTime()
    {
        return $this->time;
    }

}