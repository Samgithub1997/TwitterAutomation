<?php
use Page\Login as Login;
use Page\searchLike as SearchLike;
use  Step\Acceptance\AdminLogin as LoginAccount;
use  Step\Acceptance\fakerClass as fakerLibrary;

class searchLikeTweetCest
{
    
    public function searchAndLikeTweets(LoginAccount $I){

    //loging into twitter account
    $I->loginAccount(Login::$usernameValue,Login::$passwordValue);


    //Search for chris martin
    $I->amOnPage(SearchLike::$url);
    $I->fillField(SearchLike::$searchTweet,'chris martin');
    $I->click(SearchLike::$searchButton);
        

    $I->amOnPage(SearchLike::$url1);
    $I->see('chris martin');
    //comment on tweet section
    $I->click(SearchLike::$comment);
    $I->fillField(SearchLike::$textarea,fakerLibrary::getRandomText());
    $I->click(SearchLike::$hitReply);
    
   
    }
}
