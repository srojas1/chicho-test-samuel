<?php

namespace App\Services;

use App\Contact;


class ContactService
{

	public static function findByName($name): Contact
	{
		if($name == 'samuel') {
			$contact = new Contact();
			return $contact;
		}
	}

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbers
	}

	public static function getContact(string $name): bool
	{
		if(empty($name)) {
			return false;
		}
		return true;
	}
}