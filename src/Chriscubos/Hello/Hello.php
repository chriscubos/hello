<?php

namespace Chriscubos\Hello;

class Hello {

	/**
	 * hello world static
	 * @return string
	 */
	public static function world(){
		return Self::target("World", "world");
	}

	/**
	 * hello there static
	 * @return [type] [description]
	 */
	public static function there(){
		return Self::target("There", 'there');
	}

	/**
	 * use name instead
	 * @param  string $friend name of person
	 * @return [string]       Hello, $friend
	 */
	public static function friend($friend="chris"){
		return Self::target($friend, 'friend');
	}

	/**
	 * use message instead
	 * @param  string $message message
	 * @return [string]        Hello, $message
	 */
	public static function message($message="to you too"){
		return Self::target($message, 'message');
	}

	/**
	 * target generic function for all.
	 * @param  string $target message
	 * @param  string $action what it's doing
	 * @return [string]       Hello, $target! ($action)
	 */
	public static function target($target="", $action=""){
		return "Hello, $target! ($action)";
	}

}