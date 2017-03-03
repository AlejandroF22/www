<?php

//require_once(PATH_LIB.'SecureKey/Securekey.php');

class base{

	function __construct()
	{
		session_name('p1523148');
		session_start();
	}

	public function __destruct()
	{
	}

	function isAlpha($string)
    {
        if(isset($string) && $string!='' && is_string($string) && !preg_match('[/]', $string))
        {
            return htmlspecialchars($string);
        }
        return false;
    }

}