<?php

namespace App;

use App\Interfaces\CarrierInterface;

class Contact implements CarrierInterface
{
	function __construct()
	{
		#code ...
	}

	public function dialContact(Contact $contact)
	{
		return true;
	}

	public function makeCall()
	{
		return true;
	}

	public function getContact() {

	}
}