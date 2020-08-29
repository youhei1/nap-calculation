<?php

class CalcResult {
	public $count;
	public $start;
	public $end;
	public function __construct($count, $start, $end) {
		$this->count = $count;
		$this->start = $start;
		$this->end = $end;
	}
	public function getStartTime() {
		return $this->start->format('H:i');
	}
	public function getEndTime() {
		return $this->end->format('H:i');
	}
	public function addMinutesToStart($m) {
		$this->start->modify("{$m} modify");
	}
	public function addMinutesToEnd($m) {
		$this->end->modify("{$m} modify");
	}
}