<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

 
/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 */
class Images {
	/**
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	* @ORM\Column(type="integer")
	*/
	public $id;

	/** @ORM\Column(type="string") */
	public $title;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return title
     */
    public function setTitle($title)
    {
        $this->title = $title;
     
        return $this;
    }
 
    /**
     * Get title
     *
     * @return title 
     */
    public function getTitle()
    {
        return $this->title;
    }

}