<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/07/2017
 * Time: 16:37
 */

namespace AppBundle\Service;


use AppBundle\Entity\Category;
use Doctrine\ORM\EntityManager;

class CategoryService
{

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * CategoryService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @return Category[]
     */
    public function GetList()
    {
        $categoryRepo = $this->em->getRepository(Category::class);

        return $categoryRepo->findBy([], ['name'=> 'asc']);
    }

}