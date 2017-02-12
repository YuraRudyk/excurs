<?php

namespace Rudyk\SemExcursion\Controller;

use \Rudyk\SemExcursion\Domain\Repository\ExcursionRepository;

class ExcursionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function excursionAction()
    {       
        $this->view->assign('excursions', $this->objectManager->get(ExcursionRepository::class)->findAll());
    }
}
