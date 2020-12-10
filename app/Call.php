<?php

namespace App;


use App\Interfaces\CarrierInterface;

class Call implements CarrierInterface
{

	function __construct()
	{
		# code...
	}

	function makeCall()
	{
		return true;
	}

	public function dialContact(Contact $contact)
	{
		return true;
	}

	public function sendSMS() {
		return true;
	}
}