<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 19:44:14
 */

namespace ApigilityLogic\Foundation\Doctrine\GetterSetter;


trait Code
{
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }
}