<?php
namespace Step\Acceptance;
use Faker\Factory as fakerLib;

class fakerClass 
{
	public function getRandomText(){
		$fakerText = fakerLib::create();
		return $fakerText->text;
	}
}