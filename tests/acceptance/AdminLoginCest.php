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
    require_once('/var/www/html/TwitterAutomation/vendor/fzaninotto/faker/src/autoload.php');
    // use the factory to create a Faker\Generator instance
    $fakr = Faker\Factory::create();

    $I->fillField(Page\Login::$newPost,$fakr->text);
    $I->click(Page\Login::$clickTweet);
    }
}

