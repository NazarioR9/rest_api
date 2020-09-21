<?php

namespace App\Events;

use Symfony\Component\EventDispatcher\Event;
use App\Entity\User;
use App\Entity\Holiday;


class HolidayAdded extends Event{

	const NAME = 'holiday.added';
	private $user;
	private $holiday;


	public function __construct(User $user, Holiday $holiday){
		$this->user = user;
		$this->holiday = holiday;
	}

	public function getUser(){
		return $this->user;
	}

	public function getHoliday(){
		return $this->holiday;
	}

}

?>