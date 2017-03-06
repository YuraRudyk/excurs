<?php

namespace Rudyk\SemServices\Controller;

use \Rudyk\SemServices\Domain\Repository\ServiceRepository;
use \Rudyk\SemServices\Domain\Model\Service;

class ServiceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function servicesAction()
    {
        $serviceRepository = $this->objectManager->get(ServiceRepository::class);
       
        $this->view->assign('services', $serviceRepository->findAll());
    }

    /**
	 * Creates a new review
	 *
	 * @param Service $Service 
	 * @return void
	 */
    public function createAction(Service $Service)
    {
        var_dump($Service);
    }

}
