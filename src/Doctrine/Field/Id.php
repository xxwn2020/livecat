<?php
namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Id as DoctrineId;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;

/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 17:52:33
 */
trait Id
{
    /**
     * @DoctrineId @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

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