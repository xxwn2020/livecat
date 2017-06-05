<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 18:08:34
 */

namespace ApigilityLogic\Foundation\Doctrine\GetterSetter;


trait UpdateTime
{
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
        return $this;
    }

    public function getUpdateTime()
    {
        return $this->update_time;
    }
}