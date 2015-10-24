<?php

namespace \assets;

class ValideForm{
	
	protected $name = $_POST['name'];
	protected $surname = $_POST['surname'];
	protected $mail = $_POST['mail'];
	protected $phone = $_POST['phone'];
	protected $message = $_POST['message'];
	protected $error = array();

	

	public function isValid(){
		if (empty(self::$name) || !preg_match('/^[a-zA-Z0-9 _-]{3,16}$/',$name)) {



	 }



}