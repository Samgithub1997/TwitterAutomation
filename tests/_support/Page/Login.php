<?php
namespace Page;

class Login
{
    // include url of current page
    public static $url = '/login';
    
     //value of username
    public static $usernameValue = '7016347478';

    //value of password
    public static $passwordValue = 'testing123';
    
    //username for logging in
    public static $username = ['class' => 'js-username-field'];

    //password field
    public static $password = '.t1-form input[type=password]';

    //login button
    public static $loginButton = ['xpath'=>'//button[contains(text(),\'Log in\')]'];
    
    //write  a tweet
    public static $newPost = ['xpath' => '//*[@id=\'tweet-box-home-timeline\']'];

    //post tweet 
    public static $clickTweet = ['xpath' => '//button[@class=\'tweet-action EdgeButton EdgeButton--primary js-tweet-btn\']'];

/*
ISSUES 
clickTweet done 
newPost done
searchButton
*/
    
}
