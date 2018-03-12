<?php
namespace Step\Acceptance;
use Page\searchLike as SearchLike;

class search extends \AcceptanceTester
{
	public function searchForPeople($value)
	{
	$I->amOnPage(SearchLike::$url);
    $I->fillField(SearchLike::$searchTweet,$value);
    $I->click(SearchLike::$searchButton);		
	}
}