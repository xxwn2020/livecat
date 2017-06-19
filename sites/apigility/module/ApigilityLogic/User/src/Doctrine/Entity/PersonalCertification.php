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
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\Common\Collections\ArrayCollection;
use ApigilityLogic\Foundation\Doctrine\Field;

/**
 * Class PersonalCertification
 * @package ApigilityLogic\User\Doctrine\Entity
 * @Entity @Table(name="al_user_personal_certification")
 */
class PersonalCertification
{
    const STATUS_NOT_REVIEW = 1;
    const STATUS_REVIEWED_REJECT = 2;
    const STATUS_REVIEWED_OK = 3;


    use Field\Id;
    use Field\Status;  // 认证状态
    use Field\IdentityCardNumber; // 身份证号码


    /**
     * 身份证正面图
     *
     * @Column(type="string", length=255, nullable=true)
     */
    protected $identity_card_image_front;

    /**
     * 身份证背面图
     *
     * @Column(type="string", length=255, nullable=true)
     */
    protected $identity_card_image_back;

    /**
     * 手持身份证照片
     *
     * @Column(type="string", length=255, nullable=true)
     */
    protected $holding_identity_card_image;

    /**
     * 用户
     *
     * @OneToOne(targetEntity="User", inversedBy="personalCertification")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;


    public function setIdentityCardImageFront($identity_card_image_front)
    {
        $this->identity_card_image_front = $identity_card_image_front;
        return $this;
    }

    public function getIdentityCardImageFront()
    {
        return $this->identity_card_image_front;
    }

    public function setIdentityCardImageBack($identity_card_image_back)
    {
        $this->identity_card_image_back = $identity_card_image_back;
        return $this;
    }

    public function getIdentityCardImageBack()
    {
        return $this->identity_card_image_back;
    }

    public function setHoldingIdentityCardImage($holding_identity_card_image)
    {
        $this->holding_identity_card_image = $holding_identity_card_image;
        return $this;
    }

    public function getHoldingIdentityCardImage()
    {
        return $this->holding_identity_card_image;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}