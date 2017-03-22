<?php

namespace Rudyk\SemServices\Controller;

use \Rudyk\SemServices\Domain\Repository\ServiceRepository;

class ServiceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function servicesAction()
    {
        $serviceRepository = $this->objectManager->get(ServiceRepository::class);
       
        $this->view->assign('services', $serviceRepository->findAll());
    }

    /**
     * Adds a comment to a blog post and redirects to single view
     *
     * @param \Rudyk\SemServices\Domain\Model\Service $object
     * @return void
     */
    public function createAction(\Rudyk\SemServices\Domain\Model\Service $object = null )
    {   
        $this->objectManager->get(ServiceRepository::class)->add($object);
        $this->redirect("services");
    }

}
