<?php

namespace Rudyk\SemServices\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Review extends AbstractEntity {

    /**
     * @var string
     * @validate StringLength(minimum = 3, maximum = 50)
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $ = '';

    

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemServices\Domain\Model\Review>
     * @lazy
     */
    protected $relatedPosts = NULL;

    /**
     * Constructs this post
     */
    public function __construct() {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->comments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relatedPosts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->date = new \DateTime();
    }


    /**
     * Setter for title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Getter for title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Setter for date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date) {
        $this->date = $date;
    }

    /**
     * Getter for date
     *
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Getter for content
     *
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Setter for the comments to this post
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $comments An Object Storage of related Comment instances
     * @return void
     */
    public function setComments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $comments) {
        $this->comments = $comments;
    }

    /**
     * Adds a comment to this post
     *
     * @param Comment $comment
     * @return void
     */
    public function addComment(Comment $comment) {
        $this->comments->attach($comment);
    }

    /**
     * Removes Comment from this post
     *
     * @param Comment $commentToDelete
     * @return void
     */
    public function removeComment(Comment $commentToDelete) {
        $this->comments->detach($commentToDelete);
    }

    /**
     * Remove all comments from this post
     *
     * @return void
     */
    public function removeAllComments() {
        $comments = clone $this->comments;
        $this->comments->removeAll($comments);
    }

    /**
     * Returns the comments to this post
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage holding instances of Comment
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * Setter for the related posts
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedPosts An Object Storage containing related Posts instances
     * @return void
     */
    public function setRelatedPosts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedPosts) {
        $this->relatedPosts = $relatedPosts;
    }

    /**
     * Adds a related post
     *
     * @param Post $post
     * @return void
     */
    public function addRelatedPost(Post $post) {
        $this->relatedPosts->attach($post);
    }

    /**
     * Remove all related posts
     *
     * @return void
     */
    public function removeAllRelatedPosts() {
        $relatedPosts = clone $this->relatedPosts;
        $this->relatedPosts->removeAll($relatedPosts);
    }

    /**
     * Returns the related posts
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage holding instances of Post
     */
    public function getRelatedPosts() {
        return $this->relatedPosts;
    }
}
?>