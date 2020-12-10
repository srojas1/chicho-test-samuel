<?php

namespace App\Services;

use App\Contact;


class ContactService
{

	/**
	 * @param $name
	 * @return Contact
	 */
	public static function findByName($name): Contact
	{
		if($name == 'samuel') {
			$contact = new Contact();
			return $contact;
		}
	}

	public static function validateNumber(string $number): bool
	{
		if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $number)) {
			return true;
		}
		return false;
	}

	/**
	 * @param string $name
	 * @return bool
	 */
	public static function getContact(string $name): bool
	{
		if(empty($name)) {
			return false;
		}
		return true;
	}
}