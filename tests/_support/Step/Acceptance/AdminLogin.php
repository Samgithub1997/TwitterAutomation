<?php
namespace Step\Acceptance;
use Page\Login as Login;

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


}
