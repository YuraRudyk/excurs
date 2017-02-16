<?php

namespace Rudyk\SemExcursion\Controller;

use \Rudyk\SemExcursion\Domain\Repository\ExcursionRepository;

class ExcursionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function indexAction()
    {       
        $this->view->assign('excursions', $this->objectManager->get(ExcursionRepository::class)->findAll());
    }

    /**
     * Displays
     *
     * @param \Rudyk\SemExcursion\Domain\Model\Excursion $excursion The blog the post belongs to
     * @return string 
     */
    public function descriptionAction(\Rudyk\SemExcursion\Domain\Model\Excursion $excursion)
    {       
        $this->view->assign('excursion', $excursion);
        
    }
}
