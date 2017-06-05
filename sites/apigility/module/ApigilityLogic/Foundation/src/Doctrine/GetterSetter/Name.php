<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 18:09:35
 */

namespace ApigilityLogic\Foundation\Doctrine\GetterSetter;


trait Name
{
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}