<?php
use Page;

class searchLikeTweetCest
{
    public function searchAndLikeTweets(\AcceptanceTester $I){
    $I->amOnPage(Page\Login::$url);
    $I->fillField(Page\Login::$username, '7016347478');
    $I->fillField(Page\Login::$password, 'testing123');

    $I->click(Page\Login::$loginButton);

    //Writing An Automated Test To Search And Like Tweets o.O
    $I->amOnPage('/');
    $I->fillField(Page\searchLike::$search,'shahrukh khan');
    $I->click(Page\searchLike::$searchButton);
    
    


    }
}
