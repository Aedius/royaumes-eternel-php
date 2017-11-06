<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->articleList = new ArrayCollection();
        // your own logic
    }


    /**
     * @var Article[]
     *
     * @ORM\OneToMany(targetEntity="Article", mappedBy="author")
     */
    private $articleList;

    /**
     * @return Collection
     */
    public function getArticleList() {
        return $this->articleList;
    }


}