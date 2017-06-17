<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2017/6/12
 * Time: 18:00:53
 */

namespace ApigilityLogic\Foundation\Doctrine\Field;

use Doctrine\ORM\Mapping\Column;

trait IdentityCardNumber
{
    /**
     * 身份证号码
     *
     * @Column(type="string", length=255, nullable=true)
     */
    protected $identity_card_number;

    public function setIdentityCardNumber($identity_card_number)
    {
        $this->identity_card_number = $identity_card_number;
        return $this;
    }

    public function getIdentityCardNumber()
    {
        return $this->identity_card_number;
    }
}