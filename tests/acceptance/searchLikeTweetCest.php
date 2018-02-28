<?php
use Page;

class searchLikeTweetCest
{
    public function searchAndLikeTweets(\AcceptanceTester $I){
    $I->amOnPage(Page\Login::$url);
    $I->fillField(Page\Login::$username, '7016347478');
    $I->fillField(Page\Login::$password, 'testing123');
    //click on Login button
    $I->click(Page\Login::$loginButton);

    //Writing An Automated Test To Search And Like Tweets o.O
    $I->amOnPage(Page\searchLike::$url);
    $I->fillField(Page\searchLike::$searchTweet,'chris martin');
    $I->click(Page\searchLike::$searchButton);
        
    //USING FAKER LIBRARY O.o

    require_once('/var/www/html/TwitterAutomation/vendor/fzaninotto/faker/src/autoload.php');
    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create();

    //like buttons 
    $I->amOnPage(Page\searchLike::$url1);
    $I->see('chris martin');
    $I->click(Page\searchLike::$comment);
    $I->fillField(Page\searchLike::$textarea,$faker->text);
    $I->click(Page\searchLike::$hitReply);
    
   // $I->amOnPage(Page\searchLike::$url1);
   // $I->click(Page\searchLike::$like1);
   /* $I->click(Page\searchLike::$like4);
    $I->click(Page\searchLike::$like5);
    $I->click(Page\searchLike::$like6);
    $I->click(Page\searchLike::$like7);
    $I->click(Page\searchLike::$like8);
    $I->click(Page\searchLike::$like9);
    $I->click(Page\searchLike::$like10);
    */
    }
}
