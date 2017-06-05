<?php
namespace ApigilityLogic\Foundation\Doctrine\GetterSetter;

/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 17:52:33
 */
trait Id
{
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}