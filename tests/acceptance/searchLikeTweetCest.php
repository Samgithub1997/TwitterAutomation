<?php
use Page\Login as Login;
use Page\searchLike as SearchLike;
use  Step\Acceptance\AdminLogin as LoginAccount;
class searchLikeTweetCest
{
    
    public function searchAndLikeTweets(LoginAccount $I){
    $I->loginAccount();
    //Writing An Automated Test To Search And Like Tweets o.O
    $I->amOnPage(SearchLike::$url);
    $I->fillField(SearchLike::$searchTweet,'chris martin');
    $I->click(SearchLike::$searchButton);
        
    //USING FAKER LIBRARY O.o

    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create();

    //like buttons 
    $I->amOnPage(SearchLike::$url1);
    $I->see('chris martin');
    $I->click(SearchLike::$comment);
    $I->fillField(SearchLike::$textarea,$faker->text);
    $I->click(SearchLike::$hitReply);
    
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
