<?php 

    namespace Rudyk\SemServices\Controller;

    class ReviewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        public function createAction(\Rudyk\SemServices\Domain\Model\Reviwe $newReview){
            var_dump($newReview);
        }
    }
 ?>