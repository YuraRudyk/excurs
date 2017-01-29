<?php

namespace Media711\SemServices\Controller;

use \Media711\SemServices\Domain\Repository\ServiceRepository;

class ServiceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function servicesAction()
    {
        $serviceRepository = $this->objectManager->get(ServiceRepository::class);       
        $this->view->assign('services', $serviceRepository->findAll());
    }
}
