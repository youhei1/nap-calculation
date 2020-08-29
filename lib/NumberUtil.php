<?php

class NumberUtil {

	public static function ceilPerAny($val, $per=5) {
		return ceil($val / $per) * $per;
	}

}