<?php

namespace Rudyk\SemExcursion\Controller;

use \Rudyk\SemExcursion\Domain\Repository\ExcursionRepository;

class ExcursionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function indexAction()
    {       
        $this->view->assign('excursions', $this->objectManager->get(ExcursionRepository::class)->findAll());
    }

    
    public function descriptionAction()
    {       
        // $this->view->assign('excursion', $this->objectManager->get(ExcursionRepository::class)->findByUid(1));
        // 
        return "<h1>some test</h1>";
    }
}
