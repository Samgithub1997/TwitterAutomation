<?php
use Page;

class AdminLoginCest
{
    public function loginTwitter(\AcceptanceTester $I){
    $I->amOnPage(Page\Login::$url);
    $I->fillField(Page\Login::$username, '7016347478');
    $I->fillField(Page\Login::$password, 'testing123');

    $I->click(Page\Login::$loginButton);

    //Writing An Automated Tweet o.O

    $I->fillField(Page\Login::$newPost, 'Just setting up my Twitter. #mySecondTweet');
    $I->click(Page\Login::$clickTweet);
    }
}

