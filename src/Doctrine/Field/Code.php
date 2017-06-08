<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 19:44:14
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait Code
{
    /**
     * @Column(type="string", length=50, nullable=false)
     */
    protected $code;

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