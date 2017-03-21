<?php
namespace Rudyk\SemServices\Domain\Repository;

use \TYPO3\CMS\Extbase\Persistence\Repository;

class ServiceRepository extends Repository {

	/**
     * Adds object to queue and persists it to database
     * @param object $object
     */
    public function add($object)
    {
        parent::add($object);
        $this->persistenceManager->persistAll();
    }
}