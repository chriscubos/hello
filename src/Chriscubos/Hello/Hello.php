<?php

namespace Chriscubos\Hello;

class Hello {
	public static function world(){
		return Self::target("World", "world");
	}

	public static function there(){
		return Self::target("There", 'there');
	}

	public static function friend($friend="chris"){
		return Self::target($friend, 'friend');
	}

	public static function message($message="to you too"){
		return Self::target($message, 'message');
	}

	public static function target($target="", $action=""){
		return "Hello, $target! ($action)";
	}

}