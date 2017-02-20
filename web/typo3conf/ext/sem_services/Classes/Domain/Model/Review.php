<?php

namespace Rudyk\SemServices\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Review extends AbstractEntity {

    /**
     * @var string
     *
     */
    protected $author = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var \Rudyk\SemServices\Domain\Model\service
     */
    protected $service = NULL;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemServices\Domain\Model\Review>
     * @lazy
     */
    protected $relatedReviews = NULL;

    /**
     * Sets the service this post is part of
     *
     * @param \Rudyk\SemServices\Domain\Model\Service $service The service
     * @return void
     */
    public function setService(\Rudyk\SemServices\Domain\Model\Service $service) {
        $this->service = $service;
    }

    /**
     * Returns the service this post is part of
     *
     * @return \Rudyk\SemServices\Domain\Model\Service The service
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Setter for author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author) {
        $this->author = $author;
    }

    /**
     * Getter for author
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Setter for the related posts
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedReviews
     * @return void
     */
    public function setRelatedReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedReviews) {
        $this->relatedReviews = $relatedReviews;
    }

    /**
     * Adds a related post
     *
     * @param Review $review
     * @return void
     */
    public function addRelatedReviews(Review $review) {
        $this->relatedReviews->attach($review);
    }

    /**
     * Remove all related posts
     *
     * @return void
     */
    public function removeAllRelatedReviews() {
        $relatedReviews = clone $this->relatedReviews;
        $this->relatedReviews->removeAll($relatedReviews);
    }

    /**
     * Returns the related reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage holding instances of Review
     */
    public function getRelatedReviews() {
        return $this->relatedReviews;
    }
}
?>