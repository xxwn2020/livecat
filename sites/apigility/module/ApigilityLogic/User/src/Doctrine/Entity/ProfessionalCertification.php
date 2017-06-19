<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2016/12/13
 * Time: 15:28
 */
namespace ApigilityLogic\User\Doctrine\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use ApigilityLogic\Foundation\Doctrine\Field;

/**
 * Class ProfessionalCertification
 * @package ApigilityLogic\User\Doctrine\Entity
 * @Entity @Table(name="al_user_professional_certification")
 */
class ProfessionalCertification
{
    const STATUS_NOT_REVIEW = 1;
    const STATUS_REVIEWED_REJECT = 2;
    const STATUS_REVIEWED_OK = 3;

    use Field\Id;
    use Field\IdentityCardNumber;
    use Field\Status;  // 审核状态

    /**
     * @Column(type="string", length=255, nullable=true)
     */
    protected $certification_image_front;

    /**
     * @Column(type="string", length=255, nullable=true)
     */
    protected $certification_image_back;

    /**
     * 用户
     *
     * @ManyToOne(targetEntity="User", inversedBy="professionalCertifications")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    public function setCertificationImageFront($certification_image_front)
    {
        $this->certification_image_front = $certification_image_front;
        return $this;
    }

    public function getCertificationImageFront()
    {
        return $this->certification_image_front;
    }

    public function setCertificationImageBack($certification_image_back)
    {
        $this->certification_image_back = $certification_image_back;
        return $this;
    }

    public function getCertificationImageBack()
    {
        return $this->certification_image_back;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }
}