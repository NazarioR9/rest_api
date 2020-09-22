<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="holiday")
*/
class Holiday
{
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	/**
	* @ORM\Column(type="integer")
	* @Assert\NotBlank()
	*/
	private $eid;
	/**
	* @ORM\Column(type="datetime")
     * @Assert\DateTime
	* @Assert\NotBlank()
	*/
	private $startDate;
	/**
	* @ORM\Column(type="datetime")
     * @Assert\DateTime
	* @Assert\NotBlank()
	*/
	private $endDate;
	/**
	* @var integer
	* @ORM\Column(type="integer")
	* -1 : Pending | 0 : refused | 1: approoved
	*/
	private $approoved;

	public function __construct()
	{
		$this->approoved = -1;
	}


	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function setEId(int $eid)
	{
		$this->eid = $eid;
	}

	public function getEId(){
		return $this->eid;
	}

	public function setStartDate(\DateTime $sd)
	{
		$this->startDate = $sd;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setEndDate(\DateTime $ed)
	{
		$this->endDate = $ed;
	}

	public function getEndDate(){
		return $this->endDate;
	}

	public function setApprooved(int $appr)
	{
		$this->approoved = $appr;
	}

	public function getApprooved()
	{
		return $this->approoved;
	}

	public function to_array(): array
	{
		return array(
			'id' => $this->getID(),
			'eid' => $this->getEId(),
			'startDate' => $this->getStartDate(),
			'endDate' => $this->getEndDate(),
			'approoved' => $this->getApprooved()
		);
	}

}