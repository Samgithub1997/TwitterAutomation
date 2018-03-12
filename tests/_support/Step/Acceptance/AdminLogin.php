<?php
namespace Step\Acceptance;
use Page\Login as Login;
use Page\searchLike as SearchLike;
/* */
class AdminLogin extends \AcceptanceTester
{
	public function loginAccount($user,$pass){
	$I = $this;
	$I->amOnPage(Login::$url);

    $I->fillField(Login::$username, $user);
    $I->fillField(Login::$password, $pass);
    //click on Login button
    $I->click(Login::$loginButton);
	}

	public function searchForPeople($value)
	{
	$I = $this;
	$I->amOnPage(SearchLike::$url);
    $I->fillField(SearchLike::$searchTweet,$value);
    $I->click(SearchLike::$searchButton);		
	}
}
