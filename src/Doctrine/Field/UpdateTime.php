<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/5
 * Time: 18:08:34
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait UpdateTime
{
    /**
     * 更新时间
     *
     * @Column(type="datetime", nullable=true)
     */
    protected $update_time;

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