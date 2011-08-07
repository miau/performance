<?php

class DoctrineController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $dql = 'select p from Application\Entity\Post p where p.id = ?1';
        $em = Zend_Registry::get('doctrine')->getEntityManager();
        $post = $em->createQuery($dql)
                   ->setParameter(1, 1)
                   ->setMaxResults(1)
                   ->getResult();
        $this->view->post = $post[0];
    }


}

