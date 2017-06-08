<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/8
 * Time: 19:28:35
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait Amount
{
    /**
     * 交易事件的发生额
     *
     * @Column(type="decimal", precision=11, scale=2, nullable=false)
     */
    protected $amount;

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}