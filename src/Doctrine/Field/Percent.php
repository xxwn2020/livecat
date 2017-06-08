<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/8
 * Time: 19:35:05
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait Percent
{
    /**
     * 比值
     *
     * @Column(type="decimal", precision=5, scale=2, nullable=false)
     */
    protected $percent;

    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    public function getPercent()
    {
        return $this->percent;
    }
}