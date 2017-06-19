<?php
/**
 * Created by PhpStorm.
 * User: kentkent
 * Date: 2017/6/4
 * Time: 下午2:17
 */
namespace ApigilityLogic\User\Doctrine\Entity;

use ApigilityLogic\Address\Doctrine\Entity\Address;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class UserAddress
 * @package ApigilityLogic\User\Doctrine\Entity
 * @Entity
 */
class UserAddress extends Address
{
    /**
     * @ManyToOne(targetEntity="User", inversedBy="addresses")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
}