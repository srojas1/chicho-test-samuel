<?php

namespace Tests;

use App\Call;
use App\Contact;
use App\Mobile;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MobileTest extends TestCase
{

	/** @test */
	public function it_returns_null_when_name_empty()
	{
		$provider = m::mock(Call::class);
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
		$provider = m::mock(Contact::class);
		$mobile = new Mobile($provider);

		$this->assertFalse($mobile->getContact(''));
		$this->assertTrue($mobile->getContact('test'));
	}

	/** @test */
	public function it_returns_true_when_send_correct_sms()
	{
		$provider = new Call();
		$mobile = new Mobile($provider);

		$this->assertTrue($mobile->sendSMS('123-4567-8910','a'));
		$this->assertFalse($mobile->sendSMS('abc','a'));
		$this->assertFalse($mobile->sendSMS('123-4567-8910',''));
	}

}
