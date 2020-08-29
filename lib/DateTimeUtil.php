<?php

class DateTimeUtil {

	public static function getDate($hour, $minute) {
		$hour = str_pad($hour, 2, "0", STR_PAD_LEFT);
		$minute = str_pad($minute, 2, "0", STR_PAD_LEFT);
		return new DateTime($hour . ':' . $minute);
	}

	public static function getAsMinutes($param) {
		if ($param instanceof DateInterval) {
			return $param->h * 60 + $param->i;
		}
		if ($param instanceof DateTime) {
			return intval($param->format('H')) * 60 + intval($param->format('i'));
		}
		return 0;
	}

}
