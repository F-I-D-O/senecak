<?php

class Zaklad {

	public static function isLocalhost() {
		if($_SERVER['SERVER_NAME'] === "localhos"){
			return true;
		}
		else {
			return false;
		}
	}

} 