<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2016/12/23
 * Time: 16:54:58
 */
namespace ApigilityLogic\User\Doctrine\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use ApigilityLogic\Foundation\Doctrine\Field;

/**
 * Class Occupation
 * @package ApigilityLogic\User\Doctrine\Entity
 * @Entity @Table(name="al_user_occupation")
 */
class Occupation
{
    use Field\Id;
    use Field\Name;   // 职业名称

    /**
     * 关联到此职业的用户
     *
     * @OneToMany(targetEntity="User", mappedBy="occupation")
     */
    protected $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function setUsers($users)
    {
        $this->users = $users;
        return $this;
    }

    public function getUsers()
    {
        return $this->users;
    }
}