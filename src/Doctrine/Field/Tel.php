<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/12
 * Time: 17:55:43
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait Tel
{
    /**
     * 电话号码
     *
     * @Column(type="string", length=20, nullable=true)
     */
    protected $tel;

    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }
}