<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/12
 * Time: 20:39:55
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait Status
{
    /**
     * 状态
     *
     * @Column(type="smallint", nullable=false)
     */
    protected $status;

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
}