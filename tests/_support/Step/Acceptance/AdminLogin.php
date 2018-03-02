<?php
namespace Step\Acceptance;
use Page\Login as Login;

/* */
class AdminLogin extends \AcceptanceTester
{
	public function loginAccount(){
	$I = $this;
	$I->amOnPage(Login::$url);

    $I->fillField(Login::$username, '7016347478');
    $I->fillField(Login::$password, 'testing123');
    //click on Login button
    $I->click(Login::$loginButton);
	}


}
