<?php
use Page\Login as Login;
use Page\searchLike as SearchLike;
use  Step\Acceptance\AdminLogin as LoginAccount;
class searchLikeTweetCest
{
    
    public function searchAndLikeTweets(LoginAccount $I){

    //loging into twitter account
    $I->loginAccount();


    //Search for chris martin
    $I->amOnPage(SearchLike::$url);
    $I->fillField(SearchLike::$searchTweet,'chris martin');
    $I->click(SearchLike::$searchButton);
        

    //USING FAKER LIBRARY O.o
    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create();


    $I->amOnPage(SearchLike::$url1);
    $I->see('chris martin');
    //comment on tweet section
    $I->click(SearchLike::$comment);
    $I->fillField(SearchLike::$textarea,$faker->text);
    $I->click(SearchLike::$hitReply);
    
   
    }
}
