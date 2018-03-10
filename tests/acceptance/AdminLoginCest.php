<?php
use Page\Login as Login;
use  Step\Acceptance\AdminLogin as LoginAccount;
use  Step\Acceptance\fakerClass as fakerLibrary;

class AdminLoginCest
{
    //Writing An Automated Tweet o.O
    
    public function postOnTwitter(LoginAccount $I){
    
    //Logging into twitter account
    $I->loginAccount(Login::$usernameValue,Login::$passwordValue);


    // use the factory to create a Faker\Generator instance

    $I->pauseExecution();

    
  //  console('Important');
    //Writing a tweet
    $I->fillField(Login::$newPost,fakerLibrary::getRandomText());
    $I->click(Login::$clickTweet);
    
    }
}

