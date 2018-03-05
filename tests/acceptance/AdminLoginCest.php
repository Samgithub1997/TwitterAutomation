<?php
use Page\Login as Login;
use  Step\Acceptance\AdminLogin as LoginAccount;
class AdminLoginCest
{
    //Writing An Automated Tweet o.O

    
    public function postOnTwitter(LoginAccount $I){
    $I->loginAccount();
    // use the factory to create a Faker\Generator instance
    $fakr = Faker\Factory::create();

    $I->pauseExecution();

    //Writing a tweet
    $I->fillField(Login::$newPost,$fakr->text);
    $I->click(Login::$clickTweet);
    }
}

