<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/9
 * Time: 20:44:41
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait Balance
{
    /**
     * 余额
     *
     * @Column(type="decimal", precision=13, scale=2, nullable=false)
     */
    protected $balance;

    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}