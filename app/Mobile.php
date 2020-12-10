<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\ContactService;


class Mobile {

	protected $provider;

	function __construct(CarrierInterface $provider)
	{
		$this->provider = $provider;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return null;

		$contact = ContactService::findByName($name);

		$this->provider->dialContact($contact);

		return $this->provider->makeCall();
	}

	public function getContact($name = '')
	{
		$contact = ContactService::getContact($name);

		return $contact;
	}

	public function sendSMS($number, $body) {
		$result = false;
		$number = ContactService::validateNumber($number);

		if($number && !empty($body)) {
			$result = $this->provider->sendSMS();
		}

		return $result;
	}

}
