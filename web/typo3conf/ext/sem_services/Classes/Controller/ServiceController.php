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
}
