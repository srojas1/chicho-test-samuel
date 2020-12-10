<?php

namespace Tests;

use App\Call;
use App\Contact;
use App\Interfaces\CarrierInterface;
use App\Mobile;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MobileTest extends TestCase
{

	/** @test */
	public function it_returns_null_when_name_empty()
	{
		$provider = new Call();
		$mobile = new Mobile($provider);

		$this->assertNull($mobile->makeCallByName(''));
	}

	/** @test */
	public function it_returns_true_when_name_valid()
	{
		$provider = new Call();
		$mobile = new Mobile($provider);

		$this->assertTrue($mobile->makeCallByName('samuel'));
	}

	/** @test */
	public function it_returns_null_when_contact_not_found()
	{
		$provider = new Contact();
		$mobile = new Mobile($provider);

		$this->assertFalse($mobile->getContact(''));
		$this->assertTrue($mobile->getContact('a'));
	}

}
